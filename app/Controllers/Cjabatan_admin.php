<?php

namespace App\Controllers;
use App\Models\Mjabatan;

class Cjabatan_admin extends BaseController{

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

        //validasi inputan
		if (!$this->validate([
			'jabatan' => 'required|is_unique[jabatan.jabatan]', //[namatable.field]
		])) {
			return redirect()->to('/Cjabatan_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Jabatan sebelumnya sudah terdaftar');
		}
        
        //insert data
        $model->tambahJabatan($data);
        return redirect()->to('/Cjabatan_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }
    public function ubah(){
        $model = new Mjabatan();

        $jabatanlama = $this->request->getPost('jabatanlama');

		//cek nama jabatan 
		if ($jabatanlama == $this->request->getVar('jabatan')){
			$rule_jabatan = 'required';
		} else {
			$rule_jabatan = 'required|is_unique[jabatan.jabatan]';
		}

        if (!$this->validate([
			'jabatan' => $rule_jabatan
		])) {

			return redirect()->to('/Cjabatan_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Jabatan sebelumnya sudah terdaftar');
		}

        $id_jabatan = $this->request->getPost('id_jabatan');
        $data = [
            'jabatan' => $this->request->getPost('jabatan')
        ];
         
        $model->ubahJabatan($data,$id_jabatan);

        return redirect()->to('/Cjabatan_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }
}