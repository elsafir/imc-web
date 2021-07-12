<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class Mregion extends Model{

	public function tampilRegion(){
        $query= $this->db->query("SELECT * FROM region");
		return $query; 
    }

	public function tampilJenisRegion(){
        $query= $this->db->query("SELECT * FROM region");
		return $query; 
    }


}