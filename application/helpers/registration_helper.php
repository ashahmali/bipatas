<?php
//every helper name must have '_helper' in the name.
//helpers don't have classes. they are a collection of functions
//helpers are available any where in the application.


 function highlight_field($array, $field_name){
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$get_field = check_required_fields($array);
		if($get_field && in_array($field_name, $get_field)){
			echo ' style="border:2px solid red;" ';
		}
	}
	}


	function check_required_fields($required1 = NULL){
			$required = array();
			foreach($required1 as $needed){
				if(!isset($_POST[$needed]) || empty($_POST[$needed])){
				$required[] = $needed;
				}
			}
		if(!empty($required)){
		//There are required fields that have not been entered.
		return $required;
		}else{
		return null;
		//All required fields have been filled

		}
	}
	
	
	





