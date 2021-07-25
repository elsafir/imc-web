<?php

namespace App\Controllers;
use App\Models\Mprogram;

class Cprogram_user extends BaseController{

	public function index(){

        //session
        if (session('level')=="Administrator") {
            return redirect()->to(site_url('Cadmin'));
        }elseif (session('level')=="User") {
        }else{
            return redirect()->to(site_url('Clogin'));
        }

        $id_region = session('id_region');

		$model = new Mprogram();
		$x['data']= $model->tampilProgramUser($id_region)->getResultArray();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
        return view('user/_vprogram_user', $x);
	}

	public function tambah(){

        $id_pengguna = session('id_pengguna');

        $model = new Mprogram();

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);


 
        if ($validation == FALSE) {
             $data = array(
        'id_jenis_program' => $this->request->getPost('id_jenis_program'),
        'id_pengguna' =>  $id_pengguna,
        'judul_program'   => $this->request->getPost('judul_program'),
        'detail_program'   => $this->request->getPost('detail_program')
        );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(
            'id_jenis_program' => $this->request->getPost('id_jenis_program'),
            'id_pengguna' =>  $id_pengguna,
            'judul_program'    => $this->request->getPost('judul_program'),
            'detail_program'  => $this->request->getPost('detail_program'),
            'foto_program'             => $upload->getName()
            );
         }

        $model->tambahProgram($data);
        return redirect()->to('/Cprogram_user')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }

     public function ubah(){

        $model = new Mprogram();

        $id_program = $this->request->getPost('id_program');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

             $data = array(
        'id_jenis_program' => $this->request->getPost('id_jenis_program'),
        'id_pengguna' =>$this->request->getPost('id_pengguna'),
        'judul_program'   => $this->request->getPost('judul_program'),
        'detail_program'   => $this->request->getPost('detail_program')
        );
         } else {

            $dt = $model->pilihProgram($id_program)->getRow();
            $foto = $dt->foto;
            $path = '../public/img/';
            @unlink($path.$foto);

            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(

            'id_jenis_program' => $this->request->getPost('id_jenis_program'),
            'id_pengguna' => $this->request->getPost('id_pengguna'),
            'judul_program'    => $this->request->getPost('judul_program'),
            'detail_program'  => $this->request->getPost('detail_program'),
            'foto'            => $upload->getName()
            );
         }


        $model->ubahProgram($data,$id_program);

        return redirect()->to('/Cprogram_user')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


     public function hapus($id_program){
        $model = new Mprogram();
        $model->deleteProgram($id_program);

        return redirect()->to('/Cprogram_user');
    }
}