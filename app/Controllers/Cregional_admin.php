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
			'region' => 'required|is_unique[region.region]',
		])) {
			//untuk mengirimkan eror
			// $validation = \Config\Services::validation(); 

			return redirect()->to('/Cregional_admin')->with('gagal', '<b>DATA GAGAL DITAMBAHKAN!</b> Nama regional sebelumnya sudah terdaftar');
		}

      	//agar slug ambil dari judul region, trus spasi berubah jd -
		$slug = url_title($this->request->getVar('region'), '-', true);

		//fitur bawaan ci buat save
		$this->mRegional->save([
			'region' => $this->request->getVar('region'),
			'slug_r' => $slug, 
			'latarbelakang' => $this->request->getVar('latarbelakang')
		]);

		session()->setFlashdata('berhasil', 'DATA BERHASIL DISIMPAN');
		return redirect()->to('/Cregional_admin');
	}


	public function ubah(){
        $model = new Mregional();

        $id_region = $this->request->getPost('id_region');
		$regionLama = $this->request->getPost('regionlama');

		//cek region youtube
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
        
		$data = [
			'region'    	=> $this->request->getPost('region'),
			'latarbelakang' => $this->request->getPost('latarbelakang'),
			'slug_r'   		=> $slug
		];

        $model->ubahRegional($data,$id_region);

        return redirect()->to('/Cregional_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }






	// ubah versi gabisa input nama region sama
    // public function ubah(){ 
	// 	$model = new Mregional();

    //     $id_region = $this->request->getPost('id_region');

	// 	if (!$this->validate([
	// 		'region' => 'required|is_unique[region.region]',
	// 	])) {

	// 		return redirect()->to('/Cregional_admin')->with('gagal', '<b>DATA GAGAL DIUBAH!</b> Nama regional tidak boleh sama dengan yang sudah terdaftar');
	// 	}
        
	// 	$slug = url_title($this->request->getPost('region'), '-', true);

    //    	$data = [
	// 	   	'id_region'		=> $id_region,
	// 		'region' 		=> $this->request->getVar('region'),
	// 		'slug_r' 		=> $slug, 
	// 		'latarbelakang' => $this->request->getVar('latarbelakang')
	// 	];

	// 	$model->ubahRegional($data,$id_region);

    //     return redirect()->to('/Cregional_admin')->with('berhasil', 'DATA BERHASIL DIUBAH');
    // }
	
}