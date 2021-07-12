<?php

namespace App\Controllers;

class Cuser extends BaseController{

	public function index(){

		if (session('level')=="Administrator") {
			return redirect()->to(site_url('Cadmin'));
		}elseif (session('level')=="User") {
			//return redirect()->to(site_url('Cuser'));
		}else{
			return redirect()->to(site_url('Clogin'));
		}
		
		return view('user/_vdashboard_user');
	}


}