<?php

namespace App\Controllers;


class Clogin extends BaseController{
	
	public function index(){

		if (session('nama_anggota') && session('id_pengguna')) {
			return redirect()->to(site_url('Cadmin'));
		}elseif (session('nama_anggota') && session('id_pengguna')) {
			return redirect()->to(site_url('Cuser'));
		}

		return view('_vlogin');
	}


	public function loginProses(){

		$db = \Config\Database::connect();
		$post = $this->request->getPost();
		$user = $this->request->getPost('user');

		//$query = $db->table('pengguna')->getWhere(['username' => $post['user']]);
		$query = $db->query( "SELECT * FROM pengguna INNER JOIN community ON pengguna.id_community = community.id_community INNER JOIN region ON community.id_region=region.id_region WHERE pengguna.username='$user'");

		$user = $query->getRow();

		// $post = $this->request->getPost();
		// $query = $this->db->table('pengguna')->getWhere(['username' => $post['user']]);
		// $user = $query->getRow();
		if($user && password_verify($post['pass'], $user->password) && $user->level=='Administrator'){

			if($user->status=='Aktif'){

				$params = [
                    'id_pengguna'   => $user->id_pengguna,
                    'nama_anggota'  => $user->nama_anggota,
                    'level'  		=> $user->level,
                    'status'  		=> $user->status,
                    'id_region'  	=> $user->id_region,
                    'region'  		=> $user->region
                ];

				// $params = ['id_pengguna' => $user->id_pengguna];
				// $params = ['nama_anggota' => $user->nama_anggota];
				//$params = ['level' => $user->level];
				session()->set($params);

				return redirect()->to(site_url('Cadmin'));
				//echo "benar";

			}
			else{
				return redirect()->back()->with('error', 'Akun anda belum diaktifkan! Segera hubungi admin!');
				// echo "salah";
			}


		}
		elseif ($user && password_verify($post['pass'], $user->password) && $user->level=='User') {

			if($user->status=='Aktif'){

				$params = [
                    'id_pengguna'   => $user->id_pengguna,
                    'nama_anggota'  => $user->nama_anggota,
                    'level'  		=> $user->level,
                    'id_region'  	=> $user->id_region,
                    'region'  		=> $user->region
                ];
                
				session()->set($params);

				return redirect()->to(site_url('Cuser'));
				// echo "User";

			}
			else{
				return redirect()->back()->with('error', '<h4 style="color:red;">Akun anda belum diaktifkan! Segera hubungi admin!</h4>');
				// echo "salah";
			}

		}

		else{
			return redirect()->back()->with('error', '<h4 style="color:red;">Username & Password anda salah!</h4>');
		}

		// echo "string";

// 		$options = [
//     'cost' => 10,
// ];

// 		$user = $this->request->getPost('user');
//         $pass    = '12345678';

//         $hash = password_hash($pass, PASSWORD_DEFAULT,$options);
//         echo  $hash.'<br>';
//         echo  $pass;
	}



	public function logout(){

		session()->remove('nama_anggota');
		return redirect()->to(site_url('Chome'));


	}




}