<?php

namespace App\Controllers;
use App\Models\mRegional;

class CtentangRegional_user extends BaseController{



	public function index(){
		//session
        if (session('level')=="Administrator") {
            return redirect()->to(site_url('Cadmin'));
        }elseif (session('level')=="User") {
        }else{
            return redirect()->to(site_url('Clogin'));
        }

        $id_region = session('id_region');


        $model = new mRegional();
		$x['data']= $model->tentangRegion($id_region)->getResultArray();
        return view('user/_vtentangRegional_user',$x);
    }

    public function ubah(){

        $model = new mRegional();
        $id_region = $this->request->getPost('id_region');

        $data = array(

	      'id_region'    => $this->request->getPost('id_region'),
	      'slug_r'    => $this->request->getPost('slug'),
	      'tentang_region' => $this->request->getPost('tentang_region'),
	      'link_web' => $this->request->getPost('link_web')
        );

       
        $model->ubahRegional($data,$id_region);

        return redirect()->to('/CtentangRegional_user')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }

}