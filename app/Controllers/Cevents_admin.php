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

        $slug = url_title($this->request->getPost('judul_events'), '-', true);
 
        if ($validation == FALSE) {
            date_default_timezone_set("Asia/Jakarta");

            $data = array(
                'id_pengguna'       =>  $id_pengguna,
                'judul_events'      => $this->request->getPost('judul_events'),
                'detail_events'     => $this->request->getPost('detail_events'),
                'linkdaftar_event'  => $this->request->getPost('linkdaftar_event'),
                'slug_e'            => $slug,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');
            date_default_timezone_set("Asia/Jakarta");

            $data = array(
                'id_pengguna'       =>  $id_pengguna,
                'judul_events'      => $this->request->getPost('judul_events'),
                'detail_events'     => $this->request->getPost('detail_events'),
                'foto_events'       => $upload->getName(),
                'linkdaftar_event'  => $this->request->getPost('linkdaftar_event'),
                'slug_e'            => $slug,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            );
         }

        $judul_events = $this->request->getPost('judul_events');
        $cek = $model->cekjudulEvents($judul_events)->getRow();

        if ($cek) {
            return redirect()->to('/Cevents_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Nama judul events sebelumnya sudah terdaftar');
        }else{

        $model->tambahEvents($data);
        return redirect()->to('/Cevents_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
        }
    }


    public function ubah(){
        $model = new Mevents();

        $id_events = $this->request->getPost('id_events');

        $judullama = $this->request->getPost('judullama');

		//cek nama judul 
		if ($judullama == $this->request->getVar('judul_events')){
			$rule_judul = 'required';
		} else {
			$rule_judul = 'required|is_unique[events.judul_events]';
		}

		if (!$this->validate([
			'judul_events' => $rule_judul
		])) {

			return redirect()->to('/Cevents_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Judul sebelumnya sudah terdaftar');
		}

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        $slug = url_title($this->request->getPost('judul_events'), '-', true);

        if ($validation == FALSE) {
            date_default_timezone_set("Asia/Jakarta");
            $data = array(
                'id_pengguna'       => $this->request->getPost('id_pengguna'),
                'judul_events'      => $this->request->getPost('judul_events'),
                'detail_events'     => $this->request->getPost('detail_events'),
                'linkdaftar_event'  => $this->request->getPost('linkdaftar_event'),
                'slug_e'            => $slug,
                'updated_at'        => date('Y-m-d H:i:s')
            );
         } else {
            date_default_timezone_set("Asia/Jakarta");
            $dt = $model->pilihEvents($id_events)->getRow();
            $foto = $dt->foto_events;
            $path = '../public/img/';
            @unlink($path.$foto);

            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

            $data = array(

                'id_pengguna'       => $this->request->getPost('id_pengguna'),
                'judul_events'      => $this->request->getPost('judul_events'),
                'detail_events'     => $this->request->getPost('detail_events'),
                'foto_events'       => $upload->getName(),
                'linkdaftar_event'  => $this->request->getPost('linkdaftar_event'),
                'slug_e'            => $slug,
                'updated_at'        => date('Y-m-d H:i:s')
            );
         }

        $model->ubahEvents($data,$id_events);
        return redirect()->to('/Cevents_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


    public function hapus($id_events){
        $model = new Mevents();

        $model->deleteEvents($id_events);

        return redirect()->to('/Cevents_admin')->with('berhasil', 'DATA BERHASIL DIHAPUS');
    }

}