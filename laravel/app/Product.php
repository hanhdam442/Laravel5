<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
	protected $table = 'product';
	public $timestamps = false;
	
	public static function getLists(){
		 //= DB::table('product')->get();
		
		$items = DB::table('product')
            ->join('category', 'product.cat_id', '=', 'category.id')
            ->select('product.*', 'category.name as name_cat')
            ->get();
		
		return $items;
	}
}
