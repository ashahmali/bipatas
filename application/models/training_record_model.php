<?php
class training_record_model extends ci_model {

protected static $table_name = "training_record";
    protected static $db_fields = array('personal_record_id',		
							'tracourse', 'tracert', 'fyear', 'tyear');

							
	public $personal_record_id;
	public $tracourse;
	public $tracert;
	public $fyear;
	public $tyear;




//COMMON DATABSE METHODS.
		
	function find_by_personal_record_id($id=""){

		$this->db->where('personal_record_id', $id);
		$q = $this->db->get(self::$table_name);

		return $q->result() > 0 ? array_shift($q->result()) : null;
		
		}


		//counts all the record on the table
		function count_all(){
    	return $this->db->count_all(self::$table_name);
    }	


     //query table by custom sql    
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




    
    
    
    function delete(){
       
    }




	}