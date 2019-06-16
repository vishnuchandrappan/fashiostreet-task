<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index() {
      $products = Product::select('name','price','image')->get();
      return view('pages.index',compact('products'));
    }

    public function show() {
      $order_by = ['name','price','image'];
      $order_type = ['asc','desc'];

      $orderBy = $order_by[array_rand($order_by)];
      $orderType = $order_type[array_rand($order_type)];

      $products = Product::select('name','price','image')->orderBy($orderBy,$orderType)->get();
      return view('pages.randomOrder',compact('products'));
    }

    public function random() {
      $products = Product::select('name','price','image')->get();
      $length = sizeof($products)-1;
      for ($i=0; $i < rand($length/2,$length-1) ; $i++) {
        $i = rand(0,$length);$j = rand(0,$length);
        $temp = $products[$i];
        $products[$i] = $products[$j];
        $products[$j] = $temp;
      }
      return view('pages.randomOrder',compact('products'));
    }

    public function new() {
      return view('pages.addNewProduct');
    }

    public function create() {
      $this->validate(request(),[
        'name' => 'required|max:255',
        'price'  => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
      ]);

      $imageName = time().'.'.request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $imageName);

      Product::create([
        'name' => request('name'),
        'price' => request('price'),
        'image' => $imageName
      ]);

      return back()->with('success','Product Added Successfully');

    }
}
