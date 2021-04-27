<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Backpack\NewsCRUD\app\Models\Category;
use App\Models\Config;
use Backpack\NewsCRUD\app\Models\Article;

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
    public function shop()
    {
        return view("client.shop");
    }
    public function about()
    {
        return view("client.about");
    }
    public function blog(){
        $blog = Article::all();
    	return view("client.blog",compact('blog'));
    }
    public function blog_detail($id){
        $blog = Article::where('id',$id)->first();
        if($blog == null){
            return view("errors.400");
        }else{
            return view("client.blog-detail",compact('blog'));
        }
    }
    public function contact()
    {
        return view("client.contact");
    }
    public function product_detail()
    {
        return view("client.product-detail");
    }
    public function wishlist()
    {
        return view("client.wishlist");
    }
    public function order_complete()
    {
        return view("client.order-complete");
    }
    public function my_account()
    {
        return view("client.my-account");
    }
    public function login()
    {
        return view("client.login");
    }
    public function register()
    {
        return view("client.register");
    }
    public function checkout()
    {
        return view("client.checkout");
    }
    public function cart()
    {
        return view("client.cart");
    }

    public function filterProductByCategoryId($id)
    {
        // filter data hear
        $products = array(
            [1, "pro 1", 4500],
            [2, "pro 2", 4500],
            [3, "pro 3", 4500],
            [4, "pro 4", 4500],
            [5, "pro 5", 4500],
        );
		return view('client.ajax._list_product', compact('products'));
	}

	public function filterProductByAuthor($name)
    {
        // filter data hear
        $products = array(
            [1, "pro 1", 4500],
            [2, "pro 2", 4500],
            [3, "pro 3", 4500],
            [4, "pro 4", 4500],
            [5, "pro 5", 4500],
        );
		return view('client.ajax._list_product', compact('products'));
	}
	
	public function showProduct($page)
    {
        // filter data hear
        $products = array(
            [1, "pro 1", 4500],
            [2, "pro 2", 4500],
            [3, "pro 3", 4500],
            [4, "pro 4", 4500],
            [5, "pro 5", 4500],
        );
		return view('client.ajax._list_product', compact('products'));
	}
	
	public function sortProduct($value)
    {
        // filter data hear
        $products = array(
            [1, "pro 1", 4500],
            [2, "pro 2", 4500],
            [3, "pro 3", 4500],
            [4, "pro 4", 4500],
            [5, "pro 5", 4500],
        );
		return view('client.ajax._list_product', compact('products'));
    }
    
    public function viewModalProduct($id) {
        // select product where id
        $product = [1, "pro 1", 4500];
		return view('client.ajax.modal', compact('product'));
    }
	
	public function searchBlog($name) {
		$blogs = array(
			[1, "Blog 1", "description 1"],
			[2, "Blog 2", "description 2"],
			[3, "Blog 3", "description 3"],
			[4, "Blog 4", "description 4"],
        );
		return view('client.ajax._list_blog', compact('blogs'));
    }
    
    
}
