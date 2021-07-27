<?php

namespace App\Controllers;
use App\Models\Mcommunity;
use App\Models\Mregional;
use App\Models\Mjabatan;

class Ccommunity_admin extends BaseController{

	public function index(){

		//session
        if (session('level')=="Administrator") {
        }elseif (session('level')=="User") {
            return redirect()->to(site_url('Cuser'));
        }else{
            return redirect()->to(site_url('Clogin'));
        }


        $model = new Mcommunity();
        $model1 = new Mregional();
        $model2 = new Mjabatan();

		$x['data']= $model->tampilCommunity()->getResultArray();
		$x['rg']= $model1->tampilRegion()->getResultArray();
		$x['jb']= $model2->tampilJabatan()->getResultArray();
        return view('admin/_vcommunity_admin', $x);

	}


    public function tambah(){

        $model = new Mcommunity();

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);


 
        if ($validation == FALSE) {
             $data = array(
        'id_region' => $this->request->getPost('id_region'),
        'nama_anggota'   => $this->request->getPost('nama_anggota'),
        'id_jabatan'   => $this->request->getPost('id_jabatan')
        );
         } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(
            'id_region' => $this->request->getPost('id_region'),
            'nama_anggota'   => $this->request->getPost('nama_anggota'),
            'id_jabatan'   => $this->request->getPost('id_jabatan'),
            'foto_anggota'             => $upload->getName()
            );
         }

        $model->tambahCommunity($data);
        return redirect()->to('/Ccommunity_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
    }


    public function ubah(){
        $model = new Mcommunity();

        $id_community = $this->request->getPost('id_community');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

             $data = array(
            'id_region' => $this->request->getPost('id_region'),
            'nama_anggota'   => $this->request->getPost('nama_anggota'),
            'id_jabatan'   => $this->request->getPost('id_jabatan')
        );
         } else {

            $dt = $model->pilihCommunity($id_community)->getRow();
            $foto = $dt->foto_anggota;
            $path = '../public/img/';
            @unlink($path.$foto);

            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/img/');

             $data = array(

            'id_region' => $this->request->getPost('id_region'),
            'nama_anggota'   => $this->request->getPost('nama_anggota'),
            'id_jabatan'   => $this->request->getPost('id_jabatan'),
            'foto_anggota'            => $upload->getName()
            );
         }


        $model->ubahCommunity($data,$id_community);

        return redirect()->to('/Ccommunity_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }


    public function hapus($id_community){
        $model = new Mcommunity();
        $model->deleteCommunity($id_community);

        return redirect()->to('/Ccommunity_admin');
    }


}