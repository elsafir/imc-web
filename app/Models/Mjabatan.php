<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class Mjabatan extends Model{

	public function tampilJabatan(){
        $query= $this->db->query("SELECT * FROM jabatan");
		return $query; 
    }
  public function tambahJabatan($data){
      $query = $this->db->table('jabatan')->insert($data);
      return $query;
    }

  public function ubahJabatan($data,$id_jabatan){
    $query = $this->db->table('jabatan')->update($data, array('id_jabatan' => $id_jabatan));

    return $query;
}

}