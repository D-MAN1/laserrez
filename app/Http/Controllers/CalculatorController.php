<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Events\StatementPrepared;
class CalculatorController extends Controller
{
    public function index(){
   
   	   //echo "string";
   	   //var_dump($_GET);
   	   //$menu = view('layouts/menu')->renderContents();
   	   //echo $menu;
       //echo view('welcome');
        //$templatePath = App::call()->config['root_dir'] . "/views/{$template}.php";
        //echo "string".$templatePath;
        //extract($params);
        //include $templatePath;
         //ob_get_clean();
   	   /*return view('calculator',[
   	   	'menu' =>view('layouts.menu')]);*/
        
        /*DB::listen(function($query){
          dump($query->sql);
        });*/
            
        if (view()->exists('calculator')) {
            $materials_ = Material::orderBy('group_material', 'desc')
                ->orderBy('thickness', 'desc')
                ->get(['name','group_material','thickness','price_material','speed','price_rez']);
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
            //echo "<pre>";
            //var_dump( $materials_l );
   	   	    return view('calculator', ['materials' => $materials]);
        } 
        abort(404);
    }
}
