<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
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
    	return view("client.blog");
    }
    public function contact(){
    	return view("client.contact");
    }
    public function product_detail(){
    	return view("client.product-detail");
    }
    public function blog_detail(){
    	return view("client.blog-detail");
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
    public function cart(){
    	return view("client.cart");
    }
}
