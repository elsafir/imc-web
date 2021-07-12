<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface{

    public function before(RequestInterface $request, $arguments = null){

        if (!session('nama_anggota') && session('id_pengguna')){
			return redirect()->to(site_url('Clogin'));
		}elseif (!session('nama_anggota') && session('id_pengguna')) {
            return redirect()->to(site_url('Cadmin'));
        }elseif (!session('nama_anggota') && session('id_pengguna')) {
            return redirect()->to(site_url('Cuser'));
        }
		

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}