<?php

namespace App\Controllers;
use App\Models\Mreg;
use App\Models\Mregional;

class Cregional_admin extends BaseController{

    protected $mRegional;

	public function __construct()
	{
		$this->mRegional = new Mregional();
	}

	public function index(){
		//session
        if (session('level')=="Administrator") {
        }elseif (session('level')=="User") {
            return redirect()->to(site_url('Cuser'));
        }else{
            return redirect()->to(site_url('Clogin'));
        }

        $model = new Mregional();
		$x['data']= $model->getRegional();

        $x = [
			'data' => $this->mRegional->getRegional()
		];

		// return view('admin/_vregion_admin', $data);


        return view('admin/_vregion_admin', $x);
	}

    public function tambah()
	{
        
		//validasi inputan
		if (!$this->validate([
			'region' => 'required|is_unique[region.region]', //[namatable.field]
		])) {
			return redirect()->to('/Cregional_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Nama regional sebelumnya sudah terdaftar');
		}

      	//agar slug ambil dari judul region, trus spasi berubah jd -
		$slug = url_title($this->request->getVar('region'), '-', true);

		$validation_foto = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

		if ($validation_foto == FALSE) {
			$this->mRegional->save([
				'region' => $this->request->getVar('region'),
				'slug_r' => $slug, 
				'tentang_region' => $this->request->getVar('tentang_region'),
				'link_web' => $this->request->getVar('link_web')
			]);
		} else {
		   $upload = $this->request->getFile('file_upload');
		   $upload->move('img');

		   $this->mRegional->save([
			'region' 		=> $this->request->getVar('region'),
			'slug_r' 		=> $slug, 
			'tentang_region'=> $this->request->getVar('tentang_region'),
			'link_web' 		=> $this->request->getVar('link_web'),
			'foto_region'	=> $upload->getName(),
			]);
		}

		session()->setFlashdata('berhasil', 'DATA BERHASIL DISIMPAN');
		return redirect()->to('/Cregional_admin');
	}


	public function ubah(){
        $model = new Mregional();

        $id_region = $this->request->getPost('id_region');
		$regionLama = $this->request->getPost('regionlama');

		//cek nama region 
		if ($regionLama == $this->request->getVar('region')){
			$rule_region = 'required';
		} else {
			$rule_region = 'required|is_unique[region.region]';
		}

		if (!$this->validate([
			'region' => $rule_region
		])) {

			return redirect()->to('/Cregional_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Nama regional sebelumnya sudah terdaftar');
		}
        
        $slug = url_title($this->request->getPost('region'), '-', true);
        
		$validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

		if ($validation == FALSE) {
			$data = array(
				'region'    	=> $this->request->getPost('region'),
				'tentang_region'=> $this->request->getPost('tentang_region'),
				'link_web' 		=> $this->request->getPost('link_web'),
				'slug_r'   		=> $slug
			);
		} else {
		   $upload = $this->request->getFile('file_upload');
		   $upload->move('img');

			$data = array(
				'region'    	=> $this->request->getPost('region'),
				'tentang_region'=> $this->request->getPost('tentang_region'),
				'link_web'	 	=> $this->request->getPost('link_web'),
				'slug_r'   		=> $slug,
				'foto_region'	=> $upload->getName()
			);
		}

		// $data = [
		// 	'region'    	=> $this->request->getPost('region'),
		// 	'tentang_region' => $this->request->getPost('tentang_region'),
		// 	'link_web' => $this->request->getPost('link_web'),
		// 	'slug_r'   		=> $slug
		// ];

        $model->ubahRegional($data,$id_region);

        return redirect()->to('/Cregional_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }

	
}