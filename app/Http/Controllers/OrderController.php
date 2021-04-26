<?php 
	namespace App\Http\Controllers;
	use App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Models\Category;	
	use App\Models\Cart;
	use App\Models\Product;
	use App\Models\orders;
	use App\Models\order_detail;
	use Auth;
	use Mail;
	use Hash;
	use File;
	use Session;


	class orderController extends Controller{
		public function __construct(){
			$this->middleware(function($request,$next){
				view()->share([
		            'cart' => new cart()
		        ]);
		        return $next($request);
			});
		}

		public function checkout(){
			return view('client.checkout');
		}
		public function post_checkout(Request $request,Cart $cart,Orders $orders, order_detail $order_detail){
			$orders -> add($cart);
			$cart->clear();
			return Redirect() -> route('my-account') -> with('success','Đặt hàng thành công');
			
		}
		public function error(){
			return 'Thất bại';
		}
		public function history(){
			if(Auth::guard('customer')->check()){
				$orders = orders::where('id_cus',Auth::guard('customer')->user()->id)
					->orderBy('created_at','desc')
					->get();
				return view('client.my-account',[
					'orders' => $orders,
				]);
			}else{
				return Redirect() -> route('login');
			}
			
		}
		public function detail($id){
			if(Auth::guard('customer')->check()){
				$orders = orders::where('id', $id)->first();
				return view('client.order-detail',[
					'orders' => $orders,
				]);
			}else{
				return Redirect() -> route('login');
			}
		}
	}

 ?>