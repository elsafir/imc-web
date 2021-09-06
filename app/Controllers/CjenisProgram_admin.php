<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class CjenisProgram_admin extends ResourceController{

	public function __construct(){
		$this->model = new \App\Models\Mjenisprogram();
	}

	public function index(){

		$datajenisprogram = new \App\Models\Mjenisprogram();
		$jenis_program['data'] = $datajenisprogram->findAll();
		echo view('admin/_vjenisprogram_admin', $jenis_program);
	}



	public function create(){

		$model = new \App\Models\Mjenisprogram();

		//validasi inputan
		if (!$this->validate([
			'judul_program' => 'required|is_unique[jenis_program.jenis_program]', //[namatable.field]
		])) {
			return redirect()->to('/CjenisProgram_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Jenis Program sebelumnya sudah terdaftar');
		}

      	//agar slug ambil dari judul region, trus spasi berubah jd -
		$slug = url_title($this->request->getPost('jenis_program'), '-', true);

		 $data = array(
			 'jenis_program'   => $this->request->getPost('jenis_program'),
			 'tentang_jenis_program'  => $this->request->getPost('tentang_jenis_program'),
			 'slug_js'   => $slug
		);
		 

		$this->model->insert($data);
		return redirect()->to('/CjenisProgram_admin')->with('berhasil', 'DATA BERHASIL DISIMPAN');
	}



	public function update($id = null){

		$id_jenis_program = $this->request->getPost('id_jenis_program');
		$jenis_program_lama = $this->request->getPost('jenis_program_lama');

		//cek nama jenis program yang baru dengan yang lama 
		if ($jenis_program_lama == $this->request->getVar('jenis_program')){
			$rule_region = 'required';
		} else {
			$rule_region = 'required|is_unique[jenis_program.jenis_program]';
		}

		if (!$this->validate([
			'jenis_program' => $rule_region
		])) {

			return redirect()->to('/CjenisProgram_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Jenis Program sebelumnya sudah terdaftar');
		}

		$slug = url_title($this->request->getPost('jenis_program'), '-', true);


		$data = [
		'jenis_program'	=> $this->request->getVar('jenis_program'),
		'tentang_jenis_program'	=> $this->request->getVar('tentang_jenis_program'),
		'slug_js'   => $slug
		];

		$this->model->where('id_jenis_program', $id_jenis_program)->set($data)->update();

		return redirect()->to('/CjenisProgram_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');;
	}


}
