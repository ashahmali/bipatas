<?php

class employment_record_model extends ci_model {

	static $table_name = 'employment_record';
    protected static $db_fields = array('personal_record_id',				
							'minid', 'minaddstr', 'mincity', 'govttier', 'file_no', 'jtitle', 
							'doemp', 'doprom', 'salstruct', 'glevel', 'step', 'netsal', 'lgaofwork',  
							'stype'
							);
    
	
	
	var $personal_record_id;
	var $minid;
	var $minname;
	var $minaddstr;
	var $mincity;
	var $govttier;
	var $jtitle;
	var $doemp;
	var $doprom;
	var $salstruct;
    var $glevel;
	var $step;
	var $netsal;
	var $lgaofwork;
	var $stype;
	
	
	
	
		

    	function find_by_ministry_acronym_for_loginform($acronym="", $id=""){
    		$sql = "SELECT * FROM ".self::$table_name." WHERE minname = ? AND personal_record_id = ? LIMIT 1";
			$query = $this->db->query($sql, array($acronym, $id));
			//return array shift of the result-(), so that we will have a single object->value;
			return $query->num_rows() > 0 ? array_shift($query->result()) : null;    
	    }




	 //Common Database Methods;
	
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