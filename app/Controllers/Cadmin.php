<?php

namespace App\Controllers;

class Cadmin extends BaseController{


	public function index(){

		if (session('level')=="Administrator") {
			//return redirect()->to(site_url('Cadmin'));
		}elseif (session('level')=="User") {
			return redirect()->to(site_url('Cuser'));
		}else{
			return redirect()->to(site_url('Clogin'));
		}

		$db = \Config\Database::connect();
		$x['community'] = $db->table('community')->countAll();
		$x['program'] = $db->table('program')->countAll();
		$x['events'] = $db->table('events')->countAll();
		$x['pengguna'] = $db->table('pengguna')->countAll();
		
		return view('admin/_vdashboard_admin',$x);

	}
}