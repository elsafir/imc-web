<?php

namespace App\Models;

use CodeIgniter\Model;

class Mevents extends Model{

	protected $table = 'events';//pagination
	

	public function tampilEvents(){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna");
		return $query;
    }

    // public function tampilEventsUser($id_region){

    // public function tampilEventsUser($id_pengguna){
    //     $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna WHERE pengguna.id_pengguna='$id_pengguna'");
    //     return $query;
    // }

    public function tampilEventsUser($id_region){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna INNER JOIN community ON pengguna.id_community=community.id_community INNER JOIN region ON community.id_region=region.id_region WHERE region.id_region='$id_region'");
        return $query;
    }

    public function tampilEventsTerbaru(){

        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community ORDER BY id_events DESC LIMIT 1");
        return $query;
    }


    public function tampilMenuEventsHome(){
        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community ORDER BY id_events DESC LIMIT 3");
        return $query;
    }

    public function tampilMenuEvents(){
        $query= $this->db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community ORDER BY id_events DESC");
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

        public function cekjudulEvents($judulEvents){
         $query = $this->db->table('events')->getWhere(array('judul_events' => $judulEvents));
         return $query;
    }

}
