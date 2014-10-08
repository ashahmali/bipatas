<?php

class personal_information_model extends ci_model {

static $table_name = "personal_record";

    protected static $db_fields = array('id', 'p_title', 'sex', 'fname', 'mname', 'sname', 'maidname', 'don',
							'height', 'phone', 'dob', 'mstatus', 'religion', 'street', 'city', 'lga', 'bgroup', 
							'rhesus', 'noktitle', 'noksn', 'nokfname', 'nokon', 'nokad_street', 'nokad_city', 'rship', 'nokpn',
							 'pin','validate', 'reg_date');

	var $id;
	var $p_title;
	var $sex;
	var $fname;
    var $mname;
	var $sname;
	var $maidname;
	var $don;
	var $height;
	var $phone;
    var $dob;
	var $mstatus;
	var $religion;
	var $street;
	var $city;
	var $lga;
    var $bgroup;
	var $rhesus;
	var $noktitle;
	var $noksn;
	var $nokfname;
	var $nokon;
	var $nokad_street;
	var $nokad_city;
	var $rship;
    var $nokpn;
    var $pin;
    var $validate;
    var $reg_date;



	function find_by_id($id=""){
		$sql = "SELECT * FROM ".self::$table_name." WHERE id = ? LIMIT 1";
		$query = $this->db->query($sql, $id);
		return ($query->num_rows() > 0) ? array_shift($query->result()) : null;    
	    }


	 function full_name(){
        if(isset($this->fname) && isset($this->sname)){
        	$title = isset($this->p_title) ? $this->$p_title : '';
            return $title." ".$this->fname. " ". $this->mname. " ". $this->sname;
        }else{
            return "";
        }
    }


     function find_all(){
     	$sql = "SELECT * FROM ".self::$table_name." ORDER BY fname ASC";
		$q = $this->db->query($sql);

		if($q->num_rows() > 0){
			foreach ($q->result() as $row){
			   $data[] = $row;
			}
		return $data;
		}	
	}


	 function find_all_by_ministrie(){
     	
	}




    function validate_login($id, $pass){
    	$sql = "SELECT * FROM ".self::$table_name." WHERE id = ? AND password = ? LIMIT 1";
    	$query = $this->db->query($sql, array($id, $pass));

 		$user = $query->num_rows() == 1 ? $query->row() : null;

 		//if user is found in table, confirm user in employment record
 		if($user){

 			//let's query the employment record to confirm that this person's 
 			//record also exists in the employment record table
 			$this->load->model('employment_record_model');
 			$employ_rec = employment_record_model::find_by_personal_record_id($id);

 			if($employ_rec){
 				//this user is legible for registration
 				return $user;
 			}else{
 				//No corresponding personal record details in employment record.

 			}


 		}else{
 			//user no found in personal record table
 			return null;
 		}

    }
    
	
    //this function will confirm whether this staff exist in the database at all
	function confirm_staff_existence($id, $pin){
		$sql = "SELECT * FROM ".self::$table_name." WHERE id = ? AND pin = ? LIMIT 1";
    	$query = $this->db->query($sql, array($id, $pin));
 		return $query->num_rows() > 0 ? TRUE : NULL;
 		}
		

 	//this function confirms whether the staff has already done his registration or not
 	function confirm_staff_already_registered($id){
 		$sql = "SELECT validate FROM ". self::$table_name. " WHERE id = ?";
 		$query = $this->db->query($sql, array($id));

 		foreach($query->result() as $row){
 			$data[] = $row;
 		}

 		return $row;

 	}


 	
	
	
	
	
	         
        	
	//COMMON DATABSE METHODS.
		
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




    function validate_registration(){


    }
    
    
    function delete(){
       
    }
	
























}