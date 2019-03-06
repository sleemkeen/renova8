<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Helper\Sendmail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class PageController extends Controller
{
    
    public function index(){
    	return view('page.index'); 
    }

    public function about(){
    	return view('page.about'); 
    }
    public function product(){

    	return view('page.product'); 
    }
    public function portfolio(){
    	
    	return view('page.portfolio'); 
    }
    public function contact(){
    	
    	return view('page.contact'); 
    }
    public function commercial(){
    	
    	return view('page.commercial'); 
    }
    public function architecture(){
        
        return view('page.architectural'); 
    }
      public function projectmanagement(){
        
        return view('page.projectmanagement'); 
    }
      public function residential(){
        
        return view('page.recidential'); 
    }
}
