<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class jenisprogram extends ResourceController
{
	// public function tamplProgram($jenis_program){
	//
	// 		$query= $this->db->query( "SELECT * FROM jenis_program INNER JOIN program ON jenis_program.id_jenis_program=program.id_program WHERE jenis_program.id_jenis_program='$id_jenis_program'");
	// 		return $query;
	// }

	public function __construct()
	{
			$this->model = new \App\Models\Jenisprogram();
	}
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		//Apabila satu Data saja pada field
		// $datajenisprogram = $this->model->where('jenis_program','')->findAll();
		// return view('admin/_vjenisprogram_admin', ['jenis_program'	=> $datajenisprogram]);
		$datajenisprogram = new \App\Models\Jenisprogram();
		$jenis_program['jenis_program'] = $datajenisprogram->findAll();
		echo view('admin/_vjenisprogram_admin', $jenis_program);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		//
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		// return view('admin/formjenisprogram/vform_tambah');
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
	// 	$data = [
	// 	'jenis_program'		=> $this->request->getPost('jenis_program')
	// ];
	// $this->model->insert($data);
	//
	// return redirect()->to(base_url('jenisprogram'));

				//Function create Pop Up
				$id_jenis_program = session('id_jenis_program');

				$model = new \App\Models\Jenisprogram();

				$validation = $this->validate([
						'jenis_program' => 'required'
				]);
				 $slug = url_title($this->request->getPost('jenis_program'), '-', true);

				if ($validation == true) {
						 $data = array(
				'id_jenis_program' =>  $id_jenis_program,
				'jenis_program'   => $this->request->getPost('jenis_program'),
				'tentang_jenis_program'   => $this->request->getPost('tentang_jenis_program'),
				'slug_js'   => $slug
				);
				 } else {

						 $data = array(
							 'id_jenis_program' =>  $id_jenis_program,
							 'jenis_program'   => $this->request->getPost('jenis_program'),
							 'tentang_jenis_program'  => $this->request->getPost('tentang_jenis_program'),
							 'slug_js'   => $slug
						);
				 }

				 $this->model->insert($data);
				return redirect()->to('/jenisprogram')->with('berhasil', 'DATA BERHASIL DISIMPAN');
		}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		$datajenisprogram = $this->model->where('id_jenis_program', $id)->first();
		return view('admin/formjenisprogram/form-ubah', ['jenis_program' => $datajenisprogram]);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		 $slug = url_title($this->request->getPost('jenis_program'), '-', true);

		$data = [
		'jenis_program'	=> $this->request->getVar('jenis_program'),
		'tentang_jenis_program'	=> $this->request->getVar('tentang_jenis_program'),
		'slug_js'   => $slug
	];

	$this->model->where('id_jenis_program', $id)->set($data)->update();

	return redirect()->to(base_url('/jenisprogram'));
	}
	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		// $this->model->delete($id);
		// return redirect('admin/_vjenisprogram_admin'); --> apabila mau ada delete
	}
}
