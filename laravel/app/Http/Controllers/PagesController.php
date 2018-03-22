<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
	public function __construct()
	{
		$cats = Category::all()->toArray();
		view()->share('cats',$cats);
	}

    public function getindex()
    {
        return view('pages.home');
    }

	public function getAbout()
    {
		//$cats = Category::all()->toArray();
        return view('pages.about');
    }
	
	public function getContact()
    {
		//$cats = Category::all()->toArray();
        return view('pages.contact');
    }
	
	public function getCategory($category)
    {
		//$cats = Category::all()->toArray();
		//var_dump($category);
        return view('pages.category',['category'=>$category]);
    }
	
	public function getAdmin()
    {
		//$cats = Category::all()->toArray();
		return view('admin.admin');
    }
}
