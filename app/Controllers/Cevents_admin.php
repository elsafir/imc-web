<?php

namespace App\Controllers;
use App\Models\Mevents;

class Cevents_admin extends BaseController{

	public function index(){
		//session
        if (session('level')=="Administrator") {
        }elseif (session('level')=="User") {
            return redirect()->to(site_url('Cuser'));
        }else{
            return redirect()->to(site_url('Clogin'));
        }


        $model = new Mevents();
		$x['data']= $model->tampilEvents()->getResultArray();
        return view('admin/_vevents_admin', $x);

	}

    public function tambah(){

        $id_pengguna = session('id_pengguna');

        $model = new Mevents();

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);


 
        if ($validation == FALSE) {
             $data = array(
        'id_pengguna' =>  $id_pengguna,
        'judul_events'   => $this->request->getPost('judul_events'),
        'detail_events'   => $this->request->getPost('detail_events')
        );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(
              'id_pengguna' =>  $id_pengguna,
            'judul_events'    => $this->request->getPost('judul_events'),
            'detail_events'  => $this->request->getPost('detail_events'),
            'foto_events'             => $upload->getName()
            );
         }


        $model->tambahEvents($data);
        return redirect()->to('/Cevents_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }


    public function ubah(){
        $model = new Mevents();

        $id_events = $this->request->getPost('id_events');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

             $data = array(
        'id_pengguna' => $this->request->getPost('id_pengguna'),
        'judul_events'   => $this->request->getPost('judul_events'),
        'detail_events'   => $this->request->getPost('detail_events')
        );
         } else {

            $dt = $model->pilihEvents($id_events)->getRow();
            $foto = $dt->foto_events;
            $path = '../public/img/';
            @unlink($path.$foto);

            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(

            'id_pengguna' => $this->request->getPost('id_pengguna'),
            'judul_events'    => $this->request->getPost('judul_events'),
            'detail_events'  => $this->request->getPost('detail_events'),
            'foto_events'            => $upload->getName()
            );
         }


        $model->ubahEvents($data,$id_events);

        return redirect()->to('/Cevents_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


    public function hapus($id_events){
        $model = new Mevents();

        $model->deleteEvents($id_events);

        return redirect()->to('/Cevents_admin');
    }

}