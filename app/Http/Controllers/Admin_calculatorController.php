<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Events\StatementPrepared;
use App\Material;

class Admin_calculatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$user = Auth::user()->name;
       
        $method = $request->method();
        dump(auth()->user()->email);
        dump($request->user()->name);

        if (view()->exists('admin/calculator_admin')) {
            $materials_ = Material::orderBy('group_material', 'asc')
                ->orderBy('thickness', 'asc')
                ->get(['id','name','group_material','thickness','price_material','speed','price_rez']);
            /*
            $materials_ = DB::table('material')
                ->orderBy('group_material', 'desc')
                ->orderBy('thickness', 'desc')
                ->get();
        
            $materials_ = DB::select("SELECT * FROM material ORDER BY `group_material`, thickness");

            $dbh=DB::getPdo();
            $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $stmt = $dbh->prepare("SELECT * FROM material ORDER BY `group_material`, thickness");
            $stmt->execute();
            $materials_ = $stmt->fetchAll(\PDO::FETCH_CLASS);
            */
            $materials = array();
            //$group_material = 0;
            foreach ($materials_ as $material) {
                $materials[$material->name][] = $material;
            }
            return view('admin/calculator_admin', ['materials' => $materials]);
        }
         abort(404);
    }
    public function update(Request $request)
    {
        //dump($_POST);
        if (isset($_POST['update'])) {
            $mat = array();
            foreach ($_POST as $id_param => $value) {
                if ($id_param!='_token' && $id_param!='update') {
                    $id_param_arr = explode(':',$id_param);
                    //dump($id_param_arr);
                    $id = $id_param_arr[0];
                    $param = $id_param_arr[1];
                    if ($param == 'delete') {
                        DB::table('material')->where('id', '=', $id)->delete();
                        return redirect()->route('admin.admin_calculator');
                        exit;
                    }
                    $mat[$id][$param]= $value;
                }
            }
            
            foreach ($mat as $id => $value) {
                $thickness = $this->validateInput($value['thickness']);
                $price_material = $this->validateInput($value['price_material']);
                $speed = $this->validateInput($value['speed']);
                $price_rez = $this->validateInput($value['price_rez']);
                //dump($thickness, $price_material, $speed, $price_rez);
                DB::table('material')
                ->where('id', $id)
                ->update([
                    'thickness' => $thickness,
                    'price_material' => $price_material,
                    'speed' => $speed,
                    'price_rez' => $price_rez
                ]);
                
            }
        }elseif (isset($_POST['create'])) {
            //dump($_POST);
            $name = $_POST['name'];
            $group_material = $_POST['group_material'];
            if (!is_int((int)$group_material)) {
                $request->session()->flash('alert-danger', 'Поле "Группа" не заполнено !');
                    return redirect()->route('admin.admin_calculator');
                    exit;
            }
            if ($name =='') {
                $materials_ = DB::table('material')->where('group_material', $_POST['group_material'])->first();
                if ($materials_) {
                    $name = $materials_->name;
                    //dump($materials_);
                }
                else{
                    $request->session()->flash('alert-danger', 'Поле "Имя" не заполнено !');
                    return redirect()->route('admin.admin_calculator');
                    exit;
                }
            }
            
            DB::table('material')->insert(
                [
                    'name' => $name,
                    'group_material' => $group_material,
                    'thickness' => $this->validateInput($_POST['thickness']),
                    'price_material' => $this->validateInput($_POST['price_material']),
                    'speed' => $this->validateInput($_POST['speed']),
                    'price_rez' => $this->validateInput($_POST['price_rez'])
                ]
            );
        }   
        return redirect()->route('admin.admin_calculator');

        
         //abort(404);

        
    
    } 

    private function validateInput($str){
        $str = str_replace(',', '.',$str);
        $str =  preg_replace("/[^0-9\.]/", '', $str);
        return $str;
    }  
}
