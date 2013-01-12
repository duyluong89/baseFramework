<?php 
class Visa extends MY_Model{
	function __construct(){
		parent::__construct();
		$this->tableName = "visa_manager";
	}

	function getvisa_paydone(){
		return $this->get_where_custom("status",PAYDONE);
	}

	function getvisa_waitvisa(){
		return $this->get_where_custom("status",WAITVISA);
	}

	function getsearchvisa($key){
		$table = $this->get_table();
		$this->db->select("*");
		$this->db->where("code like '%$key%'");
		$query = $this->db->get($table);
		return $query->result();
	}

	function update_dispatch($code, $data){
		$table = $this->get_table();
		$this->db->where('code', $code);
		return $this->db->update($table, $data);
	}

	function get_where_code($code){
		$table = $this->get_table();
		$this->db->where('code', $code);
		$query=$this->db->get($table)->result();
		//var_dump($query); die();
		
		return $query[0];
	}

	function delete_visa($id){
		$table = $this->get_table();
		$this->db->where('code', $id);
		return $this->db->delete($table);
}

}

?>