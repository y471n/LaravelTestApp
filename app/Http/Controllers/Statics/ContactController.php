<?php

namespace App\Http\Controllers\Statics;

use App\Http\Controllers\Controller;

class ContactController extends Controller {

		public function index() {
			return view('statics.contact');
		}
}

?>
