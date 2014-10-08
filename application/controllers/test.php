<?php

class Test extends CI_Controller {


	function index(){

		$this->load->model("personal_information_model");

		$sql = "Select * from personal_record where sname='MOKOLO'";
		$user = $this->personal_information_model->find_by_sql($sql);





		
	
		//$pin = 'FL00000939';
		//$user = $this->personal_information_model->find_by_id($pin);
		//$user = $this->personal_information_model->validate_login($pin, $pin);

		if($user){

		echo $user->mname.'<br />';
		$this->personal_information_model->fname = $user->fname;
		$this->personal_information_model->sname = $user->sname;
		$this->personal_information_model->mname = $user->mname;

		echo $this->personal_information_model->full_name();
	}else{
		echo "Sorry, this user does not exist!";
	}


	echo "<h1>".$this->personal_information_model->count_all()."</h1>";

	}






}