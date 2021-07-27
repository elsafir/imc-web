<?php

namespace App\Models;

use CodeIgniter\Model;

class Mprogram extends Model{

    // protected $table = 'program';

	public function tampilProgram(){

        // $builder = $this->db->table('program');
        // $builder->select('*');
        // $builder->join('jenis_program', 'program.id_jenis_program = jenis_program.id_jenis_program');
        // return $builder->get();

        $query= $this->db->query( "SELECT * FROM program INNER JOIN jenis_program ON program.id_jenis_program = jenis_program.id_jenis_program INNER JOIN pengguna ON program.id_pengguna=pengguna.id_pengguna");
		return $query;
    }

    public function tampilProgramUser($id_region){

        $query= $this->db->query( "SELECT * FROM program INNER JOIN jenis_program ON program.id_jenis_program=jenis_program.id_jenis_program INNER JOIN pengguna ON program.id_pengguna=pengguna.id_pengguna INNER JOIN community ON pengguna.id_community=community.id_community INNER JOIN region ON community.id_region=region.id_region WHERE region.id_region='$id_region'");
        return $query;
    }


    public function tampilJenisProgram(){
        $query= $this->db->query("SELECT * FROM jenis_program");
		return $query;
    }



		public function tampilJenisProgram1($slug_js){
        $query= $this->db->query("SELECT * FROM jenis_program where slug_js='$slug_js'");
		return $query;
    }

    public function tampilMenuProgram($slug_js){
        $query= $this->db->query( "SELECT * FROM program INNER JOIN jenis_program ON program.id_jenis_program = jenis_program.id_jenis_program INNER JOIN pengguna ON program.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community WHERE jenis_program.slug_js='$slug_js' ORDER BY id_program DESC LIMIT 3");
        return $query;
    }


    public function tampilDetailProgram($slug_p){

        $query= $this->db->query( "SELECT * FROM program INNER JOIN jenis_program ON program.id_jenis_program = jenis_program.id_jenis_program INNER JOIN pengguna ON program.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community WHERE program.slug_p='$slug_p'");
        return $query;
    }

    public function tambahProgram($data){
        $query = $this->db->table('program')->insert($data);
        // $query=$this->db->query("INSERT INTO program(id_jenis_program,judul_program,detail_program,foto) VALUES ('$id_jenis_program','$judul_program','$detail_program','$foto') ");
        return $query;
    }

        public function pilihProgram($id_program){
         $query = $this->db->table('program')->getWhere(array('id_program' => $id_program));
         return $query;
    }


    public function ubahProgram($data,$id_program){
        $query = $this->db->table('program')->update($data, array('id_program' => $id_program));

        // $query=$this->db->query("UPDATE program SET id_jenis_program='$id_jenis_program',judul_program='$judul_program',detail_program='$detail_program' WHERE id_program='$id_program'");

        return $query;
    }




    public function deleteProgram($id_program){

        $query = $this->db->table('program')->delete(array('id_program' => $id_program));
        return $query;

     //    $this->db->where('id_program',$id_program);
	    // $this->db->delete('program');
    }


}
