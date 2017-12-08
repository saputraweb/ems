<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        
        $this->load->model('Mform','mf');
        
    }
	
	public function index()
	{
		$this->load->view('form');
	}
	
	function simpandata()
	{
		$t = explode(".",$this->input->post('tgl_lahir'));
		$data['nama'] = $this->input->post('nama');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tgl_lahir'] = $t[2]."-".$t[1]."-".$t[0];
		$data['jenkel'] = $this->input->post('jenkel');
		$data['riwayat'] = $this->input->post('riwayat');
		$data['malu'] = intval($this->input->post('malu'));
		$data['bersalah'] = intval($this->input->post('bersalah'));
		$data['merendah'] = intval($this->input->post('merendah'));
		$data['menarik'] = intval($this->input->post('menarik'));
		$data['percaya'] = intval($this->input->post('percaya'));
		$data['menciderai'] = intval($this->input->post('menciderai'));
		$data['created_at'] = date("Y-m-d H:i:s");
		$hasil =  intval($this->input->post('malu')) +  intval($this->input->post('bersalah')) +  intval($this->input->post('merendah')) 
					+  intval($this->input->post('menarik')) + intval($this->input->post('percaya')) +  intval($this->input->post('menciderai'));
		if($hasil >= 1 ){
			$data['hasil'] = 'satuya';
		} else {
			$data['hasil'] = 'ases2';
		}
		$data['flagases']='N';
		$lastId = $this->mf->simpanData($data);
		redirect('histori/detail?id='.$lastId, 'refresh');
	}
	
	function detail(){
		
		$data['det'] = $this->mf->getDataPasien($_GET['id']);
		$this->load->view('detail',$data);
	}

	function simpanassest()
	{
		$lastId = $this->input->post('id_pasien');
		$data['id_pasien'] = $this->input->post('id_pasien');
		$data['berbaring'] = intval($this->input->post('berbaring'));
		$data['duduk'] = intval($this->input->post('duduk'));
		$data['dukberdiri'] = intval($this->input->post('dukberdiri'));
		$data['berdiri'] = intval($this->input->post('berdiri'));
		$data['berjalan'] = intval($this->input->post('berjalan'));
		$data['meter'] = intval($this->input->post('meter'));
		$data['mejangkau'] = intval($this->input->post('mejangkau'));
		$data['created_at'] = date("Y-m-d H:i:s");
		$total =  intval($this->input->post('berbaring')) +  intval($this->input->post('duduk')) +  intval($this->input->post('dukberdiri')) 
					+  intval($this->input->post('berdiri')) + intval($this->input->post('berjalan')) 
					+  intval($this->input->post('meter')) + +  intval($this->input->post('mejangkau')) ;
		$data['total'] = $total;
		
		$up['flagases']='Y';

		$this->mf->simpanAssest($data);
		$this->mf->updateKlien($up,$lastId);
		redirect('histori/detail?id='.$lastId, 'refresh');
	}
	
	
}
