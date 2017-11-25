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
		
		$lastId = $this->mf->simpanData($data);
		redirect('form/detail?id='.$lastId, 'refresh');
	}
	
	function detail(){
		
		$data['det'] = $this->mf->getDataPasien($_GET['id']);
		$this->load->view('detail',$data);
	}
	
	
}
