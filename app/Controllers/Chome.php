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
		$x['mp']= $model->tampilMenuProgram($slug_js)->getResultArray();
		return view('frontend/_vprogram_front',$x);
	}

	public function menuEvents(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return view('frontend/_vevents_front',$x);
	}

	public function detailProgram($slug_p){
		$model = new Mprogram();
		$model1 = new Mregional();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['dp']= $model->tampilDetailProgram($slug_p)->getResultArray();
		return view('frontend/_vdetailprogram_front',$x);
	}

	public function detailEvents($slug_e){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['de']= $model2->tampilDetailEvents($slug_e)->getResultArray();
		return view('frontend/_vdetailevents_front',$x);
	}

	public function detailCommunity($slug_r){
		$model = new Mprogram();
		$model1 = new Mregional();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['rm']= $model1->tampilRegionManager()->getResultArray();
		$x['jrr']= $model1->tampilJenisRegionn($slug_r)->getResultArray();
		$x['mc']= $model1->tampilMenuCommunity($slug_r)->getResultArray();
		$x['er']=$model1->tampilEventsRegional($slug_r)->getResultArray();
		return view('frontend/_vcommunity_front',$x);
	}

	public function about(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vabout_front', $x);
	}


<<<<<<< HEAD
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

=======
	public function team(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$model3 = new Mteam();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		$x['ceo']= $model3->tampilCEO()->getResultArray();
		$x['gsc']= $model3->tampilGeneralSecretary()->getResultArray();
		$x['sc']= $model3->tampilSecretary()->getResultArray();
		$x['coo']= $model3->tampilCOO()->getResultArray();
		$x['cpo']= $model3->tampilCPO()->getResultArray();
		$x['chro']= $model3->tampilCHRO()->getResultArray();
		$x['cmo']= $model3->tampilCMO()->getResultArray();
		$x['Headf']= $model3->tampilHeadFinance()->getResultArray();
		$x['Headhrd']= $model3->tampilHeadHRD()->getResultArray();
		$x['hrd']= $model3->tampilHRD()->getResultArray();
		$x['Headhrr']= $model3->tampilHeadHRR()->getResultArray();
		$x['hrr']= $model3->tampilHRR()->getResultArray();
		$x['f']= $model3->tampilFinance()->getResultArray();
		$x['fu']= $model3->tampilFunding()->getResultArray();
		$x['Headrc']= $model3->tampilHeadRC()->getResultArray();
		$x['rc']= $model3->tampilRC()->getResultArray();
		$x['Headbs']= $model3->tampilHeadBs()->getResultArray();
		$x['bs']= $model3->tampilBs()->getResultArray();
		$x['HeadMedia']= $model3->tampilHeadMedia()->getResultArray();
		$x['cm']= $model3->tampilCm()->getResultArray();
		$x['PicV']= $model3->tampilPicV()->getResultArray();
		$x['v']= $model3->tampilV()->getResultArray();
		$x['PicD']= $model3->tampilPicD()->getResultArray();
		$x['d']= $model3->tampilD()->getResultArray();
		$x['PicWD']= $model3->tampilPicWD()->getResultArray();
		$x['wd']= $model3->tampilWD()->getResultArray();
		$x['HeadEdu']= $model3->tampilHeadEdu()->getResultArray();
		$x['Edu']= $model3->tampilEdu()->getResultArray();
		$x['HeadEco']= $model3->tampilHeadEco()->getResultArray();
		$x['Eco']= $model3->tampilEco()->getResultArray();
		$x['HeadSos']= $model3->tampilHeadSos()->getResultArray();
		$x['Sos']= $model3->tampilSos()->getResultArray();
		
		return View('frontend/_vteam_front', $x);
	}

>>>>>>> 2a11325caec6099559741714baed23b28d2b9855
	public function contact(){
		$model = new Mprogram();
		$model1 = new Mregional();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return View('frontend/_vcontact_front', $x);
	}
}
