<?php

namespace App\Models;

use CodeIgniter\Model;

class Mregional extends Model
{
    protected $table      = 'region';
    protected $primaryKey = 'id_region';
    protected $allowedFields = ['region', 'slug_r', 'latarbelakang']; //ini field yang boleh diisi

    protected $useTimestamps = false;

    public function getRegional($slug = false)
    {
        if ($slug == false){ 
            return $this->findAll();
        }
        return $this->where(['slug_r' => $slug])-> first();
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


}