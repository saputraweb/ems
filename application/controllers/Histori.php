<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histori extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
        $this->load->model('Mform','mf');
        
    }
	
	public function index()
	{
		$list = $this->mf->listDataKlien();
		$hasil="";
		foreach($list as $l){
			$detail="<a href='".base_url()."histori/detail?id=".$l->id_pasien."' class='btn btn-sm btn-info'><span class='glyphicon glyphicon-file' aria-hidden='true'></span></a>";
			$hasil.="<tr>";
			$hasil.="<td>".$l->created_at."</td>";
			$hasil.="<td>".$l->nama."</td>";
			$hasil.="<td>".$l->tempat_lahir."</td>";
			$hasil.="<td>".$l->tgl_lahir."</td>";
			$hasil.="<td>".$l->jenkel."</td>";
			$hasil.="<td>".$detail."</td>";
			$hasil.="</tr>";
		}
		$data['hasil']=$hasil;
		$this->load->view('histori',$data);
	}

	function detail(){
		$det =  $this->mf->getDataPasien($_GET['id']);
		$listSatu = array("0"=>"Tidak membutuhkan lebih dari 2 orang","1"=>"Butuh bantuan 1 orang","2"=>"Mandiri");
		$listDua = array("0"=>"Butuh bantuan lebih dari 2 orang","1"=>"Butuh bantuan 1 orang","2"=>"Mandiri (lebih dari 3 detik)","3"=>"Mandiri (kurang dari 3 detik)");
		$listTiga = array("0"=>"Hanya berdiri dengan bantuan daru orang lain","1"=>"Berdiri tetapi butuh bantuan","2"=>"Berdiri tanpa bantuan tetapi membutuhkan bantuan untuk meraih pegangan","3"=>"Berdiri tanpa bantuan dan mampu meraih pegangan");
		$listEmpat = array("0"=>"Butuh bantuan secara fisik untuk jalan ","1"=>"Berpindah dengan alat bantu jalan tetapi tidak aman","2"=>"Sendiri dengan berpegangan pada handrail","3"=>"Sendiri (dengan atau tanpa tongkat)");
		$listLima = array("0"=>"Tidak mampu berjalan sejauh 6 meter","1"=>"Tidak mampu berjalan sejauh 6 meter","2"=>"16 – 30 detik","3"=>"Kurang dari 15 detik");
		$listEnam = array("0"=>"Kurang dari 10 cm","2"=>"10 – 20 cm","4"=>"Lebih dari 20 cm");
		$lissatu="";$lisdua="";$listiga="";$lisempat="";$lislima="";$lisenam="";
		$hasil ="";
		if($det->flagases =="N"){
			foreach($listSatu as $key => $value ){
				$lissatu.="<option value='".$key."'>".$value."</option>";
			}
			foreach($listDua as $key => $value ){
				$lisdua.="<option value='".$key."'>".$value."</option>";
			}
			foreach($listTiga as $key => $value ){
				$listiga.="<option value='".$key."'>".$value."</option>";
			}
			foreach($listEmpat as $key => $value ){
				$lisempat.="<option value='".$key."'>".$value."</option>";
			}
			foreach($listLima as $key => $value ){
				$lislima.="<option value='".$key."'>".$value."</option>";
			}
			foreach($listEnam as $key => $value ){
				$lisenam.="<option value='".$key."'>".$value."</option>";
			}
		}
		if($det->flagases =="Y"){
			$hasil = $this->mf->getHasil($_GET['id']);
			$lissatu = $listSatu[$hasil->berbaring].".".$listSatu[$hasil->duduk];
			$lisdua = $listDua[$hasil->dukberdiri];
			$listiga = $listTiga[$hasil->berdiri];
			$lisempat = $listEmpat[$hasil->berjalan];
			$lislima = $listLima[$hasil->meter];
			$lisenam = $listEnam[$hasil->mejangkau];
			
		}
		$data['hasil'] = $hasil;
		$data['lissatu'] = $lissatu;
		$data['lisdua'] = $lisdua;
		$data['listiga'] = $listiga;
		$data['lisempat'] = $lisempat;
		$data['lislima'] = $lislima;
		$data['lisenam'] = $lisenam;
		$data['det'] = $det;
		$this->load->view('histdetail',$data);
	}
}
