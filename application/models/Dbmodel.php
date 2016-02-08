<?php
class Dbmodel extends CI_Model{
	public function insertdb($data){
		$this->load->database();
		$this->db->insert('cases', $data); 
		echo "Data entered successfully";
	}

	public function Registrydata(){
		$this->load->database();
		$query = $this->db->query('SELECT tdate,crdate,code,cnumber,cyear,ctype,jofficer,ccfor,outcome,adjreason,nadate FROM cases');
		Return $query->result_array();

		
	}
	
}
?>