<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class ProductController extends Controller
{
	public function __construct()
	{
		$cats = Category::all()->toArray();
		view()->share('cats',$cats);
	}
	
    public function getProduct()
    {
		$cats = Category::all()->toArray();
		$items = Product::getLists();
		return view('admin.admin',['items'=>$items]);
    }
	
	public function addProduct(Request $request){
		//echo 'Successful';
		$a = $request->all();
		$data = array(
			'cat_id' => $a['cat_id'],
			'name' => $a['name'],
			'price' => $a['price'],
			'desc' => $a['desc'],
			'image' => '#',
		);

		$objProduct = new Product();
		$objProduct->insert($data);
		//echo '<script>alert("Successful");location.href="";</script>';
		$cats = Category::all()->toArray();
		$items = Product::getLists();
		
		return view('admin.admin',['items'=>$items]);
	}

	public function editProduct(Request $request){
		//echo 'This page edit product';
		$a = $request->all();
		
		$objProduct = new Product();
		$getProduct = $objProduct->find($a['id']);
		$getProduct->name = $a['name'];
		$getProduct->cat_id = $a['cat_id'];
		$getProduct->price = $a['price'];
		$getProduct->desc = $a['desc'];
		$getProduct->save();
		
		$cats = Category::all()->toArray();
		$items = Product::getLists();
		
		return view('admin.admin',['items'=>$items]);
	}
	
	public function delProduct(Request $request){
		$a = $request->all();
		foreach ($a['cid'] as $id){
			Product::find($id)->delete();
		}
		$cats = Category::all()->toArray();
		$items = Product::getLists();
		
		return view('admin.admin',['items'=>$items]);
	}
}
