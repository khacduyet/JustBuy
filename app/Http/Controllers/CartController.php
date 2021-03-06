<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
     public function __construct(){
        $this->middleware(function($request,$next){
            view()->share([
                'cart' => new cart()
            ]);
            return $next($request);
        });
    }

    public function add_cart($id,Cart $cart){
        $models = Products::where('id', $id)->first();

        if($models){
            $cart -> add($models);

            return redirect() -> route('cart') -> with('success','Thêm vào giỏ hàng thành công');
        }else{
            return redirect() -> back();
        }
    }

    public function cart() {
        return view('client.cart',[
            'cart'=> new cart(),
        ]);
    }

    function delete_cart($id,Cart $cart){
        $cart -> delete($id);

        return redirect() -> back() -> with('success','Xóa thành công');
    }

    function update_cart($id,Cart $cart){
        $quantity = request()->number;
        $cart -> update($id,$quantity);
    }
    function clear_cart(Cart $cart){
        $cart -> clear();
        return redirect() -> route('cart') -> with('success','Xóa thành công');
    }
}