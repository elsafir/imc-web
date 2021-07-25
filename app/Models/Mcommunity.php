<?php 

namespace App\Models;
 use CodeIgniter\Model;
 
class Mcommunity extends Model{

	// protected $table = 'community';

	public function tampilCommunity(){

        $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan");
		return $query;	 
    }

    public function tampilCommunityUser($id_region){

        $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE community.id_region='$id_region'");
        return $query;   
    }

    public function tampilMenuCommunity($slug_r){

        $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region = region.id_region INNER JOIN jabatan ON community.id_jabatan = jabatan.id_jabatan WHERE region.slug_r='$slug_r'");
        return $query;   
    }

    public function tampilJabatan(){
        $query= $this->db->query("SELECT * FROM jabatan");
		return $query; 
    }

    public function tambahCommunity($data){
        $query = $this->db->table('community')->insert($data);
        return $query;
    }


    public function pilihCommunity($id_community){
        $query  = $this->db->table('community')->getWhere(array('id_community' => $id_community));
         return $query;
    }


    public function ubahCommunity($data,$id_community){
        $query = $this->db->table('community')->update($data, array('id_community' => $id_community));

        return $query;
    }

        public function deleteCommunity($id_community){

        $query = $this->db->table('community')->delete(array('id_community' => $id_community));
        return $query;
    } 


}