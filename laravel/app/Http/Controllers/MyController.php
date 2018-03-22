<?php 
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyController extends Controller
{
    public function getController(){
		echo 'this is test my controller';
	}
	
	public function demo2Controller($name1,$name2){
		echo 'Hello '.$name1.' and '.$name2;
	}
	
	public function getView(){
		$data['user'] = 'Hanh';
		return view('MyView',$data);
	}
	
	public function getView2(){
		$data['user'] = 'Hanh';
		return view('MyFirstView',$data);
	}
}