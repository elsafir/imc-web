<?php

namespace App\Models;

use CodeIgniter\Model;

class Mregional extends Model
{
    protected $table      = 'region';
    protected $primaryKey = 'id_region';
    protected $allowedFields = ['region', 'slug_r', 'foto_region', 'tentang_region','link_web']; //ini field yang boleh diisi

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

    public function tentangRegion($id_region){
        $query= $this->db->query("SELECT * FROM region WHERE id_region='$id_region'");
        return $query; 
    }

	public function tampilJenisRegion(){
        $query= $this->db->query("SELECT * FROM region WHERE region != 'Pusat' ");
		return $query; 
    }


    public function tampilJenisRegionn($slug_r){
        $query= $this->db->query("SELECT * FROM region WHERE slug_r = '$slug_r' ");
        return $query; 
    }

    // public function tampilMenuCommunity($slug_r){
    //     $query= $this->db->query( "SELECT * FROM community INNER JOIN region ON community.id_region = region.id_region INNER JOIN jabatan ON community.id_jabatan = jabatan.id_jabatan WHERE region.slug_r='$slug_r'");
    //     return $query;   
    // }

    // public function tampilRegionManager(){
    //     $query= $this->db->query( "SELECT * FROM community INNER JOIN jabatan ON community.id_jabatan = jabatan.id_jabatan INNER JOIN region ON community.id_region = region.id_region WHERE community.id_region != 4 AND community.id_jabatan = 1");
    //     return $query;   
    // }

    public function tampilEventsRegional($slug_r){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna INNER JOIN community ON pengguna.id_community=community.id_community INNER JOIN region ON community.id_region=region.id_region WHERE region.slug_r='$slug_r'");
        return $query;
    }

    
    public function tampilDetailTeams($slug_r){

        $query= $this->db->query( "SELECT * FROM region INNER JOIN community ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE region.slug_r='$slug_r'");
        return $query;
    }

}