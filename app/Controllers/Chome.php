<?php

namespace App\Controllers;
use App\Models\Mprogram;
use App\Models\Mregional;
use App\Models\Mevents;
use App\Models\Mteam;
use App\Models\Mcommunity;
use Config\View;

class Chome extends BaseController
{

	public function index()
	{
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEventsHome()->getResultArray();
		return view('frontend/_vhome_front',$x);
	}

	public function search(){

		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		
		$db = \Config\Database::connect();
		$cari = $this->request->getPost('cari');

		$x['cr_pr'] = $db->query( "SELECT * FROM program INNER JOIN jenis_program ON program.id_jenis_program = jenis_program.id_jenis_program INNER JOIN pengguna ON program.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community WHERE jenis_program LIKE '%$cari%' OR judul_program LIKE '%$cari%' OR detail_program LIKE '%$cari%'")->getResultArray();

		$x['cr_ev'] = $db->query( "SELECT * FROM events INNER JOIN pengguna ON events.id_pengguna=pengguna.id_pengguna  INNER JOIN community ON pengguna.id_community = community.id_community WHERE judul_events LIKE '%$cari%' OR detail_events LIKE '%$cari%'")->getResultArray();

		$x['cr_cm'] = $db->query( "SELECT * FROM community INNER JOIN region ON community.id_region=region.id_region INNER JOIN jabatan ON community.id_jabatan=jabatan.id_jabatan WHERE region LIKE '%$cari%' OR nama_anggota LIKE '%$cari%' OR  jabatan LIKE '%$cari%'")->getResultArray();

		// $x['cr'] = $query->getRow();
		
		return view('frontend/_vsearch_front',$x);
	}


	public function menuProgram($slug_js){
		$model = new Mprogram();
		$model1 = new Mregional();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jp1']= $model->tampilJenisProgram1($slug_js)->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['mp']= $model->tampilMenuProgram($slug_js)->getResultArray();
		return view('frontend/_vprogram_front',$x);
	}

	public function menuEvents(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return view('frontend/_vevents_front',$x);
	}

	public function detailProgram($slug_p){
		$model = new Mprogram();
		$model1 = new Mregional();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['dp']= $model->tampilDetailProgram($slug_p)->getResultArray();
		return view('frontend/_vdetailprogram_front',$x);
	}

	public function detailEvents($slug_e){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['de']= $model2->tampilDetailEvents($slug_e)->getResultArray();
		return view('frontend/_vdetailevents_front',$x);
	}

	public function detailCommunity($slug_r){
		$model = new Mprogram();
		$model1 = new Mregional();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		// $x['rm']= $model1->tampilRegionManager()->getResultArray();
		$x['jrr']= $model1->tampilJenisRegionn($slug_r)->getResultArray();
		// $x['mc']= $model1->tampilMenuCommunity($slug_r)->getResultArray();
		$x['er']=$model1->tampilEventsRegional($slug_r)->getResultArray();
		return view('frontend/_vcommunity_front',$x);
	}

	public function about(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vabout_front', $x);
	}


	public function detailTeam($slug_r){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr2']= $model1->tampilDetailTeams($slug_r)->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vteam_front', $x);
	}

	public function detailteamPusat($slug_r){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr2']= $model1->tampilDetailTeams($slug_r)->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vteamPusat_front', $x);
	}

	public function contact(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['jr1']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vcontact_front', $x);
	}
}
