<?php

namespace App\Models;

use CodeIgniter\Model;

class Mevents extends Model{

	// protected $table = 'events';

	public function tampilEvents(){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna");
		return $query;
    }


    public function tampilEventsTerbaru(){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community ORDER BY id_events DESC LIMIT 1");
        return $query;
    }


    public function tampilMenuEvents(){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community ORDER BY id_events DESC LIMIT 3");
        return $query;
    }

    public function tampilDetailEvents($slug_e){
        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community WHERE events.slug_e='$slug_e'");
        return $query;
    }



    public function tambahEvents($data){
        $query = $this->db->table('events')->insert($data);

        return $query;
    }


    public function pilihEvents($id_events){
         $query = $this->db->table('events')->getWhere(array('id_events' => $id_events));
         return $query;
    }


    public function ubahEvents($data,$id_events){
        $query = $this->db->table('events')->update($data, array('id_events' => $id_events));

        return $query;
    }

    public function deleteEvents($id_events){

        $query = $this->db->table('events')->delete(array('id_events' => $id_events));
        return $query;
    }

}
