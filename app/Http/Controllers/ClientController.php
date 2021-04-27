<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Config;
use App\Models\Blog;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'category' => Category::all(),
                // 'brand' => brand::all(),
                'config' => Config::all(),
                // 'cart' => new cart(),
            ]);
            return $next($request);
        });
    }
    public function index(){
    	return view("client.index");
    }
    public function shop(){
    	return view("client.shop");
    }
    public function about(){
    	return view("client.about");
    }
    public function blog(){
        $blog = Blog::all();
    	return view("client.blog",compact('blog'));
    }
    public function blog_detail($id){
        $blog = Blog::where('id',$id)->first();
        if($blog == null){
            return view("errors.400");
        }else{
            return view("client.blog-detail",compact('blog'));
        }
    }
    public function contact(){
    	return view("client.contact");
    }
    public function product_detail(){
    	return view("client.product-detail");
    }
    public function wishlist(){
    	return view("client.wishlist");
    }
    public function order_complete(){
    	return view("client.order-complete");
    }
    public function my_account(){
    	return view("client.my-account");
    }
    public function login(){
    	return view("client.login");
    }
    public function register(){
    	return view("client.register");
    }
    public function checkout(){
    	return view("client.checkout");
    }
}
