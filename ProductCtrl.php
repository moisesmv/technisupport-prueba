<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCtrl extends Controller
{

	public function listall()
	{
		$products = Product::all();
		return view('products', ['products' => $products->toArray()]);
	}
	
	public function save(Request $request)
	{
		
		if($request->btnSend=="save"){
			$this->validate($request, [
			'id' => 'required',
			'name' => 'required',
			'stock' => 'required'
			]);

			$count = Product::where('id',$request->id)->count();
			if($count>0){
				$pro = Product::find($request->id);
				$pro->name = $request->name;
				$pro->stock = $request->stock;
				$pro->save();
			}
			else{
				$pro = new Product;
				$pro->id = $request->id;
				$pro->name = $request->name;
				$pro->stock = $request->stock;
				$pro->save();
			}
		}
		else{
			$pro = Product::find($request->id);
			$pro->delete();
		}
		//Product::create($request->all());
		return redirect('products');
	}
	
}