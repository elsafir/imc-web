<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class Mjabatan extends Model{

	public function tampilJabatan(){
        $query= $this->db->query("SELECT * FROM jabatan");
		return $query; 
    }


}