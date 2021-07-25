<?php

namespace App\Controllers;
use App\Models\Mevents;

class Cevents_user extends BaseController{

	public function index(){

        //session
        if (session('level')=="Administrator") {
            return redirect()->to(site_url('Cadmin'));
        }elseif (session('level')=="User") {
        }else{
            return redirect()->to(site_url('Clogin'));
        }

        $id_pengguna = session('id_pengguna');

        $model = new Mevents();
		$x['data']= $model->tampilEventsUser($id_pengguna)->getResultArray();
        return view('user/_vevent_user', $x);
    }
}