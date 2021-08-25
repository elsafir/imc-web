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

        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {
			$data = array(
                'id_region'    => $this->request->getPost('id_region'),
                'slug_r'    => $this->request->getPost('slug'),
                'tentang_region' => $this->request->getPost('tentang_region'),
                'link_web' => $this->request->getPost('link_web')
			);
		} else {
		   $upload = $this->request->getFile('file_upload');
		   $upload->move('img');

			$data = array(
				'id_region'     => $this->request->getPost('id_region'),
                'slug_r'        => $this->request->getPost('slug'),
                'tentang_region'=> $this->request->getPost('tentang_region'),
                'link_web'      => $this->request->getPost('link_web'),
                'foto_region'   => $upload->getName()
			);
		}

        // $data = array(

	    //   'id_region'    => $this->request->getPost('id_region'),
	    //   'slug_r'    => $this->request->getPost('slug'),
	    //   'tentang_region' => $this->request->getPost('tentang_region'),
	    //   'link_web' => $this->request->getPost('link_web')
        // );

       
        $model->ubahRegional($data,$id_region);

        return redirect()->to('/CtentangRegional_user')->with('berhasil', 'DATA BERHASIL DIUBAH');
    }

}