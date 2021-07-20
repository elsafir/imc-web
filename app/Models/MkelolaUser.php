<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class MkelolaUser extends Model{


	public function tampilKelolaUser(){

        $query= $this->db->query( "SELECT * FROM pengguna INNER JOIN community ON pengguna.id_community=community.id_community INNER JOIN region ON community.id_region=region.id_region");
		return $query;	 
    }

    public function tambahKelolaUser($data){
        $query = $this->db->table('pengguna')->insert($data);

        return $query;
    }


    public function ubahKelolaUser($data,$id_pengguna){
        $query = $this->db->table('pengguna')->update($data, array('id_pengguna' => $id_pengguna));

        return $query;
    }


    public function resetKelolaUser($data,$id_pengguna){
        $query = $this->db->table('pengguna')->update($data, array('id_pengguna' => $id_pengguna));

        return $query;
    }


}