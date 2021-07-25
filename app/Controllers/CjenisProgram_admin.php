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

		$slug = url_title($this->request->getPost('jenis_program'), '-', true);

		$id_jenis_program = $this->request->getPost('id_jenis_program');

		$data = [
		'jenis_program'	=> $this->request->getVar('jenis_program'),
		'tentang_jenis_program'	=> $this->request->getVar('tentang_jenis_program'),
		'slug_js'   => $slug
		];

		$this->model->where('id_jenis_program', $id_jenis_program)->set($data)->update();

		return redirect()->to('/CjenisProgram_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');;
	}


}
