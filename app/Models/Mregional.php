<?php

namespace App\Models;

use CodeIgniter\Model;

class Mregional extends Model
{
    protected $table      = 'region';
    protected $primaryKey = 'id_region';
    protected $allowedFields = ['region', 'slug_r', 'latarbelakang']; //ini field yang boleh diisi

    protected $useTimestamps = false;

    public function getRegional($slug_r = false)
    {
        if ($slug_r == false){ 
            return $this->findAll();
        }
        return $this->where(['slug_r' => $slug_r])-> first();
    }

    public function ubahRegional($data,$id_region){
        $query = $this->db->table('region')->update($data, array('id_region' => $id_region));
        return $query;
    }
    
    public function tampilRegion(){
        $query= $this->db->query("SELECT * FROM region");
		return $query; 
    }

	public function tampilJenisRegion(){
        $query= $this->db->query("SELECT * FROM region WHERE region != 'Pusat' ");
		return $query; 
    }

    public function tampilMenuCommunity($slug){

        $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region = region.id_region INNER JOIN jabatan ON community.id_jabatan = jabatan.id_jabatan WHERE region.slug_r='$slug'");
        return $query;   
    }


}