<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // thêm dữ liệu
		// public function create(){
		// 	return view('pages.admin.banner.add');
		// }
		public function contact_store(Request $request,Contact $contact){
			$model = $contact->add();
	        if ($contact) {
                // dd($contact);
	            // return redirect()->route('contact') -> with('message','Thêm mới thành công');
                return redirect()->route('contact');
	        }else{
                // dd("false ");
	            // return redirect()->back()->with('message','Thêm mới thất bại' );
                return redirect()->back();
	        }
		}
}
