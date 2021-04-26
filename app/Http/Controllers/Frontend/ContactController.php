<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // thêm dữ liệu
		// public function create(){
		// 	return view('pages.admin.banner.add');
		// }
		public function contact_store(Request $request,Contact $contact){
			$model = $contact->add();
	        if ($contact) {
	            return redirect()->route('contact') -> with('message','Thêm mới thành công');
	        }else{
	            return redirect()->back()->with('message','Thêm mới thất bại' );
	        }
		}
}
