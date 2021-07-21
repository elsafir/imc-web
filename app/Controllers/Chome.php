<?php

namespace App\Controllers;
use App\Models\Mprogram;
use App\Models\Mregion;
use App\Models\Mevents;
use App\Models\Mcommunity;

class Chome extends BaseController
{
	public function index()
	{
		$model = new Mprogram();
		$model1 = new Mregion();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['et']= $model2->tampilEventsTerbaru()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return view('frontend/_vhome_front',$x);
	}

	public function menuProgram($slug_js){
		$model = new Mprogram();
		$model1 = new Mregion();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jp1']= $model->tampilJenisProgram1($slug_js)->getResultArray(); //pemanggilan pada Mprogram yg where
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['mp']= $model->tampilMenuProgram($slug_js)->getResultArray();
		return view('frontend/_vprogram_front',$x);
	}

	public function menuEvents(){
		$model = new Mprogram();
		$model1 = new Mregion();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['me']= $model2->tampilMenuEvents()->getResultArray();
		return view('frontend/_vevents_front',$x);
	}

	public function menuCommunity($slug_r){
		$model = new Mprogram();
		$model1 = new Mregion();
		$model2 = new Mcommunity();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['mc']= $model2->tampilMenuCommunity($slug_r)->getResultArray();
		return view('frontend/_vcommunity_front',$x);
	}

	public function detailProgram($slug_p){
		$model = new Mprogram();
		$model1 = new Mregion();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['dp']= $model->tampilDetailProgram($slug_p)->getResultArray();
		return view('frontend/_vdetailprogram_front',$x);
	}

	public function detailEvents($slug_e){
		$model = new Mprogram();
		$model1 = new Mregion();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['de']= $model2->tampilDetailEvents($slug_e)->getResultArray();
		return view('frontend/_vdetailevents_front',$x);
	}

	public function detailCommunity($id_community){
		$model = new Mprogram();
		$model1 = new Mregion();
		$model2 = new Mevents();
		$x['jp']= $model->tampilJenisProgram()->getResultArray();
		$x['jr']= $model1->tampilJenisRegion()->getResultArray();
		$x['de']= $model2->tampilDetailEvents($id_events)->getResultArray();
		return view('frontend/_vdetailevents_front',$x);
	}

}
