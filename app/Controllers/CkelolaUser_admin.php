<?php

namespace App\Controllers;
use App\Models\MkelolaUser;
use App\Models\Mcommunity;

class CkelolaUser_admin extends BaseController{

	public function index(){

		//session
		if (session('level')=="Administrator") {
		}elseif (session('level')=="User") {
		    return redirect()->to(site_url('Cuser'));
		}else{
		    return redirect()->to(site_url('Clogin'));
		}

		$model = new MkelolaUser();
		$model1 = new Mcommunity();
		$x['cm']= $model1->tampilCommunity()->getResultArray();
		$x['data']= $model->tampilKelolaUser()->getResultArray();
		return view('admin/_vkelolauser_admin', $x);

	}


	public function tambah(){

        $model = new MkelolaUser();

         $data = array(
          'id_community'    => $this->request->getPost('id_community'),
          'username'    => $this->request->getPost('username'),
          'password'  	=> password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
          'status' => $this->request->getPost('status'),
          'level' => $this->request->getPost('level')
        );


        $model->tambahKelolaUser($data);
        return redirect()->to('/CkelolaUser_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }


    public function ubah(){

        $model = new MkelolaUser();
        $id_pengguna = $this->request->getPost('id_pengguna');

        $data = array(

	      'id_community'    => $this->request->getPost('id_community'),
	      'username'    => $this->request->getPost('username'),
	      'status' => $this->request->getPost('status'),
	      'level' => $this->request->getPost('level')
        );

       
        $model->ubahKelolaUser($data,$id_pengguna);

        return redirect()->to('/CkelolaUser_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }

    public function reset_password(){

    	$model = new MkelolaUser();
    	$id_pengguna = $this->request->getPost('id_pengguna');

    	$data = array(
    	 'id_community'    => $this->request->getPost('id_community'),
    	  'password'  	=> password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
    	);

    	$model->resetKelolaUser($data,$id_pengguna);

        return redirect()->to('/CkelolaUser_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');



    }


}