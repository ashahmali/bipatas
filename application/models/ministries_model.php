<?php
class Ministries_model extends ci_model {


	static $table_name = 'ministries';

	 function getAll() {
		$this->db->order_by('name', 'asc');
		$q = $this->db->get('ministries');
		if($q->num_rows() > 0){
		 foreach ($q->result() as $row){
		     $data[] = $row;
		 }
		 return $data;
			}

	}


	


	function find_by_acronym($acronym=""){
			$sql = "SELECT * FROM ".self::$table_name." WHERE acronyms = ? LIMIT 1";
			$query = $this->db->query($sql, array($acronym));

			if($query->num_rows() > 0){
				//return array shift of the result-(), so that we will have a single object->value;
				return array_shift($query->result());
			}else{
				return null;
			}
		        
	    }


	    
    function update($id, $array){
    	
		foreach($array as $key => $val){
			$data[$key] = $val;
		}

		//$this->db->update('table_name', $data(array_of_fields), 'array of where id = 3, name= '$name')
	 if($this->db->update(self::$table_name, $data, array('id' => $id))){
	 		return true;
	 }else{
	 		return false;
	 }

    }















}