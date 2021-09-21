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

        // $id_pengguna = session('id_pengguna');

        // $model = new Mevents();
		// $x['data']= $model->tampilEventsUser($id_pengguna)->getResultArray();
        // return view('user/_vevent_user', $x);

        $id_region = session('id_region');
        $model = new Mevents();
		$x['data']= $model->tampilEventsUser($id_region)->getResultArray();
        return view('user/_vevent_user', $x);
    }
    public function tambah(){

        $id_pengguna = session('id_pengguna');

        $model = new Mevents();

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);


         $slug = url_title($this->request->getPost('judul_events'), '-', true);
 
        if ($validation == FALSE) {
             $data = array(
        'id_pengguna' =>  $id_pengguna,
        'judul_events'   => $this->request->getPost('judul_events'),
        'detail_events'   => $this->request->getPost('detail_events'),
        'linkdaftar_event' => $this->request->getPost('linkdaftar_event'),
        'slug_e'   => $slug
        );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(
              'id_pengguna' =>  $id_pengguna,
            'judul_events'    => $this->request->getPost('judul_events'),
            'detail_events'  => $this->request->getPost('detail_events'),
            'foto_events'             => $upload->getName(),
            'linkdaftar_event' => $this->request->getPost('linkdaftar_event'),
            'slug_e'   => $slug
            );
         }

        $judul_events = $this->request->getPost('judul_events');
        $cek = $model->cekjudulEvents($judul_events)->getRow();

        if ($cek) {
            return redirect()->to('/Cevents_user')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Judul events sebelumnya sudah terdaftar');
        }else{

        $model->tambahEvents($data);
        return redirect()->to('/Cevents_user')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    
        }
    }


    public function ubah(){
        $model = new Mevents();

        $id_events = $this->request->getPost('id_events');
        $eventlama = $this->request->getPost('judul_event');

        //cek nama event 
		if ($eventlama == $this->request->getVar('judul_event')){
			$rule_event = 'required';
		} else {
			$rule_event = 'required|is_unique[event.judul_event]';
		}

        if (!$this->validate([
			'judul_event' => $rule_event
		])) {

			return redirect()->to('/Cevents_user')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Judul event sebelumnya sudah terdaftar. Silahlan masukkan judul yang berbeda');
		}

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        $slug = url_title($this->request->getPost('judul_events'), '-', true);

        if ($validation == FALSE) {
            $data = array(
                'id_pengguna' => $this->request->getPost('id_pengguna'),
                'judul_events'   => $this->request->getPost('judul_events'),
                'detail_events'   => $this->request->getPost('detail_events'),
                'linkdaftar_event' => $this->request->getPost('linkdaftar_event'),
                'slug_e'   => $slug
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
            'foto_events'            => $upload->getName(),
            'linkdaftar_event' => $this->request->getPost('linkdaftar_event'),
            'slug_e'   => $slug
            );
         }


        $model->ubahEvents($data,$id_events);
        return redirect()->to('/Cevents_user')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


    public function hapus($id_events){
        $model = new Mevents();

        $model->deleteEvents($id_events);

        return redirect()->to('/Cevents_user')->with('berhasil', 'DATA BERHASIL DIHAPUS');
    }
}