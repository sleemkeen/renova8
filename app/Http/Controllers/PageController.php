<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Helper\Sendmail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Info;
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
    public function startaproject(){

        return view('page.startaproject');
    }
    public function postenq(Request $request){
        $data = $request->all();
        $insert = Info::create($data);
        $sendemail = new Sendmail();
        $msgs = "Please login to your dashboard to follow up with customer";
        $sender = $sendemail->sendmail('akhmadharuna@gmail.com','hello@renova8.com', $data['fname'],$msgs,'hello@renova8.com', 'NEW CUSTOMER');
        if($insert){
            return json_encode(['response' => 200]);
        }else{
            return back();
        }
    }
}
