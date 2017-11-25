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
		
		$data['det'] = $this->mf->getDataPasien($_GET['id']);
		$this->load->view('histdetail',$data);
	}
}
