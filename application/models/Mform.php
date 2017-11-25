<?php 
Class Mform extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
		
	function simpanData($data)
	{
		$this->db->insert("data_pasien",$data);
		return $this->db->insert_id();
	}
	
	
	
	function getDataPasien($id){
		$sql="SELECT a.*, date_format(a.tgl_lahir,'%d.%m.%Y') as tgl_lahir, date_format(a.created_at,'%d.%m.%Y %H:%i:%s') as created_at FROM data_pasien a WHERE a.id_pasien='".$id."'";
		$query=$this->db->query($sql);
		$row = $query->row();
		return $row;	
	}

	function listDataKlien(){
		$query="select
				a.*, date_format( a.created_at,'%Y-%m-%d %H:%i:%s') as created_at, 
				date_format(a.tgl_lahir,'%d.%m.%Y') as tgl_lahir,
				(
				case
					when a.jenkel ='L' then 'Laki-laki'
					when a.jenkel ='P' then 'Perempuan'
					else ''
				end
				) as jenkel
				from data_pasien a";
		$recordset = $this->db->query($query);
		$recordset = $recordset->result();
		return $recordset;
	}
}
?>