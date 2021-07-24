<?php

namespace App\Controllers;
use App\Models\Mjabatan;

class Cjabatan extends BaseController{

	public function index(){
		//session
        if (session('level')=="Administrator") {
        }elseif (session('level')=="User") {
            return redirect()->to(site_url('Cuser'));
        }else{
            return redirect()->to(site_url('Clogin'));
        }


        $model = new Mjabatan();
		$x['data']= $model->tampilJabatan()->getResultArray();
        return view('admin/_vjabatan_admin', $x);

	}
    public function tambah(){

        $id_jabatan = session('id_jabatan');

        $model = new Mjabatan();
        $data = [
            'jabatan' => $this->request->getPost('jabatan')
        ];
        //insert data
        $model->tambahJabatan($data);
        return redirect()->to('/Cjabatan')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }
    public function ubah(){
        $model = new Mjabatan();

        $id_jabatan = $this->request->getPost('id_jabatan');
        $data = [
            'jabatan' => $this->request->getPost('jabatan')
        ];
         
        $model->ubahJabatan($data,$id_jabatan);

        return redirect()->to('/Cjabatan')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }
}