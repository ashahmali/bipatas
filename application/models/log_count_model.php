<?php
class log_count_model extends CI_Model {
	static $table_name = 'log_count';

	static $db_fields = array('personal_record_id', 'log', 'log_date');

	var $personal_record_id;
	var $log;
	var $log_date;





	function find_by_personal_record_id($id=""){

		$this->db->where('personal_record_id', $id);
		$q = $this->db->get(self::$table_name);

		return $q->result() > 0 ? array_shift($q->result()) : null;
		
		}



         
    function find_by_sql($sql=""){
      		$query = $this->db->query($sql);

		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}

			return $row;

		}else{
			return null;
		}
    }

    
	
	function create($array){
 		return $this->db->insert(self::$table_name, $array); 
    }
       
    

    function update($id, $array){
    	//$key is the table fields, $val is the value.
		foreach($array as $key => $val){
			$data[$key] = $val;
		}

		//$this->db->update('table_name', $data(array_of_fields), 'array of where id = 3, name= '$name')
	 if($this->db->update(self::$table_name, $data, array('personal_record_id' => $id))){
	 		return true;
	 }else{
	 		return false;
	 }

    }



    
    
    function delete(){
       
    }













}