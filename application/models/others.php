<?php
class others extends CI_model {

	var $state_id;
	var $state_name;

 
	
	
	function get_state_name($id){
		$sql = "SELECT * FROM states WHERE id = ? LIMIT 1";
		$query = $this->db->query($sql, $id);
		$name =($query->num_rows() > 0) ? array_shift($query->result()) : null; 
		return $name->name;
	}
	
	function get_laga_name($lgaid){
		$sql = "SELECT * FROM lga WHERE id = ? LIMIT 1";
		$query = $this->db->query($sql, $lgaid);
		$name =($query->num_rows() > 0) ? array_shift($query->result()) : null; 
		return $name->name;
	}
	
	
	 function get_lgas_of_selected_state($id){
		if($id != null){
			$sql = "SELECT * FROM lga WHERE state_id = ".$id." ORDER BY name ASC";
			$q = $this->db->query($sql);

			if($q->num_rows() > 0){
				foreach ($q->result() as $row){
				   $data[] = $row;
				}
			return $data;
			}
		}else{
			return null;
		}
			
	}
	
	 function get_all_delta_state_lga(){
		$sql = "SELECT * FROM lga WHERE state_id = 11 ORDER BY name ASC";
		$q = $this->db->query($sql);

		if($q->num_rows() > 0){
			foreach ($q->result() as $row){
			   $data[] = $row;
			}
		return $data;
		}
		
			
	}


	function get_all_states(){
			$sql = "SELECT * FROM states ORDER BY id ASC";
			$q = $this->db->query($sql);

			if($q->num_rows() > 0){
				foreach ($q->result() as $row){
				   $data[] = $row;
				}
			return $data;
			}	
		}
		
		
		function get_all_banks(){
			$sql = "SELECT * FROM banks ORDER BY name ASC";
			$q = $this->db->query($sql);

			if($q->num_rows() > 0){
				foreach ($q->result() as $row){
				   $data[] = $row;
				}
			return $data;
			}	
		}











}