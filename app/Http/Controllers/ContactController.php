<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Events\StatementPrepared;
use Illuminate\Support\Facades\App;
class ContactController extends Controller
{
    public function index(){
            
        if (view()->exists('contact')) {
        	$locale = App::getLocale();
dump($locale);
if (App::isLocale('en')) {
    //
}
   	   	    return view('contact', [ 'title' => 'Контакты']);
        } 
        abort(404);
    }
}
