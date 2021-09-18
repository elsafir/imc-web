<?php

namespace App\Controllers;
use App\Models\Mprogram;

class Cprogram_admin extends BaseController{

	public function index(){

        //session
        if (session('level')=="Administrator") {
        }elseif (session('level')=="User") {
            return redirect()->to(site_url('Cuser'));
        }else{
            return redirect()->to(site_url('Clogin'));
        }

		$model = new Mprogram();
		$x['data']= $model->tampilProgram()->getResultArray();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
        return view('admin/_vprogram_admin', $x);
	}


	public function tambah(){

        $id_pengguna = session('id_pengguna');

        //validasi inputan
		if (!$this->validate([
			'judul_program' => 'required|is_unique[program.judul_program]', //[namatable.field]
		])) {
			return redirect()->to('/Cprogram_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Judul Program sebelumnya sudah terdaftar. Silahkan gunakan judul yang berbeda');
		}

        $model = new Mprogram();
        // $data = array(
        //     'id_jenis_program'  => $this->request->getPost('id_jenis_program'),
        //     'judul_program'     => $this->request->getPost('judul_program'),
        //     'detail_program'    => $this->request->getPost('detail_program'),
        // );

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        $slug = url_title($this->request->getPost('judul_program'), '-', true);
 
        if ($validation == FALSE) {
             $data = array(
        'id_jenis_program' => $this->request->getPost('id_jenis_program'),
        'id_pengguna' =>  $id_pengguna,
        'judul_program'   => $this->request->getPost('judul_program'),
        'detail_program'   => $this->request->getPost('detail_program'),
        'slug_p'   => $slug

        );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(
            'id_jenis_program' => $this->request->getPost('id_jenis_program'),
            'id_pengguna' =>  $id_pengguna,
            'judul_program'    => $this->request->getPost('judul_program'),
            'detail_program'  => $this->request->getPost('detail_program'),
            'foto_program'             => $upload->getName(),
            'slug_p'   => $slug
            );
         }

        // $id_program = $this->request->getPost('id_program');
        // $id_jenis_program = $this->request->getPost('id_jenis_program');
        // $judul_program    = $this->request->getPost('judul_program');
        // $detail_program   = $this->request->getPost('detail_program');
        
        $model->tambahProgram($data);
        return redirect()->to('/Cprogram_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }


    public function ubah(){
        $model = new Mprogram();

        // $id_program = $this->request->getPost('id_program');
        // $data = array(
        //     'id_jenis_program'  => $this->request->getPost('id_jenis_program'),
        //     'judul_program'     => $this->request->getPost('judul_program'),
        //     'detail_program'    => $this->request->getPost('detail_program'),
        // );
        $i = 0;

        $id_program = $this->request->getPost('id_program');
		$judul_program_lama = $this->request->getPost('judul_program_lama');

		//cek judul program 
		if ($judul_program_lama == $this->request->getVar('judul_program')){
			$rule_program = 'required';
		} else {
			$rule_program = 'required|is_unique[program.judul_program]';
		}

        if (!$this->validate([
			'judul_program' => $rule_program
		])) {

			return redirect()->to('/Cprogram_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Judul program sebelumnya sudah terdaftar');
		}

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        $slug = url_title($this->request->getPost('judul_program'), '-', true);

        if ($validation == FALSE) {

             $data = array(
        'id_jenis_program' => $this->request->getPost('id_jenis_program'),
        'id_pengguna' => $this->request->getPost('id_pengguna'),
        'judul_program'   => $this->request->getPost('judul_program'),
        'detail_program'   => $this->request->getPost('detail_program'),
        'slug_p'   => $slug
        );
         } else {

            $dt = $model->pilihProgram($id_program)->getRow();
            $foto = $dt->foto_program;
            $path = '../public/img/';
            @unlink($path.$foto);

            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(

            'id_jenis_program' => $this->request->getPost('id_jenis_program'),
            'id_pengguna' => $this->request->getPost('id_pengguna'),
            'judul_program'    => $this->request->getPost('judul_program'),
            'detail_program'  => $this->request->getPost('detail_program'),
            'foto_program'            => $upload->getName(),
            'slug_p'   => $slug
            );
         }


        // $id_program = $this->request->getPost('id_program');
        // $id_jenis_program = $this->request->getPost('id_jenis_program');
        // $judul_program    = $this->request->getPost('judul_program');
        // $detail_program   = $this->request->getPost('detail_program');

        $model->ubahProgram($data,$id_program);

        return redirect()->to('/Cprogram_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


     public function hapus($id_program){
        $model = new Mprogram();
        //$id_program = $this->request->getPost('id_program');

        $model->deleteProgram($id_program);

        return redirect()->to('/Cprogram_admin');
    }


}