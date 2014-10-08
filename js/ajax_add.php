<?php
session_start();

// function to remove secondary school when deleted.

function remove_item_with_value($array, $key, $value){
     foreach($array as $subKey => $subArray){
          if($subArray[$key] == $value){
               unset($array[$subKey]);
          }
     }
     return $array;
}

/**
 * This store secondary school details to an array and
 * then put the array in session
 * */

if (!isset($_SESSION['sec_sch'])){
	$_SESSION['sec_sch'] = array();
}

if (isset($_GET['secschname'])){
	$secsch_name = $_GET['secschname'];
	//$_SESSION['secschname'] = $secsch_name;
}

if (isset($_GET['yroentry'])){
	$secsch_entry_yr = $_GET['yroentry'];
	//$_SESSION['yroentry'] = $secsch_entry_yr;
}

if (isset($_GET['yrograd'])){
	$secsch_grad_yr = $_GET['yrograd'];
	//$_SESSION['yrograd'] = $secsch_grad_yr;
}

if (isset($_GET['secqual'])){
	$secsch_qual = $_GET['secqual'];
	//$_SESSION['secqual'] = $secsch_qual;
}

if(!empty($secsch_name)){
	//session_destroy();
	//$_SESSION['sec_sch'] = array();
	$_SESSION['sec_sch'][] = array(
			'secsch_name' => $secsch_name, //$_SESSION['secschname'],
			'secsch_entry_yr' => $secsch_entry_yr, //$_SESSION['yroentry'],
			'secsch_grad_yr' => $secsch_grad_yr, //$_SESSION['yrograd'],
			'secsch_qual' => $secsch_qual, //$_SESSION['secqual'],
		);

	// this is the json variable for secondary school
	// mike put this into CI Session.
	echo $sec_sch_json = json_encode( $_SESSION['sec_sch']);

}


/**
 * This store secondary school details to an array and
 * then put the array in session
 * */

if (!isset($_SESSION['tert_sch'])){
	$_SESSION['tert_sch'] = array();
}

if (isset($_GET['notersch'])){
	$notersch = $_GET['notersch'];
	//$_SESSION['notersch'] = $notersch;
}

if (isset($_GET['tyoentry'])){
	$tyoentry = $_GET['tyoentry'];
	//$_SESSION['tyoentry'] = $tyoentry;
}

if (isset($_GET['tyograd'])){
	$tyograd = $_GET['tyograd'];
	//$_SESSION['tyograd'] = $tyograd;
}

if (isset($_GET['tqualobt'])){
	$tqualobt = $_GET['tqualobt'];
	//$_SESSION['tqualobt'] = $tqualobt;
}

if (isset($_GET['matno'])){
	$matno = $_GET['matno'];
	//$_SESSION['matno'] = $matno;
}

if (isset($_GET['spectn'])){
	$spectn = $_GET['spectn'];
	//$_SESSION['spectn'] = $spectn;
}

if(!empty($tyoentry)){
	//$_SESSION['tert_sch'] = array();
	$_SESSION['tert_sch'][] = array(
		'notersch' => $notersch, //$_SESSION['notersch'],
		'tyoentry' => $tyoentry, //$_SESSION['tyoentry'],
		'tyograd' => $tyograd, //$_SESSION['tyograd'],
		'tqualobt' => $tqualobt, //$_SESSION['tqualobt'],
		'matno' => $matno, //$_SESSION['matno'],
		'spectn' => $spectn, //$_SESSION['spectn'],
	);

	// this is the json variable for secondary school
	// mike put this into CI Session.
	echo $ter_sch_json = json_encode( $_SESSION['tert_sch']);
}

/**
 * This store Training details to an array and
 * then put the array in session
 * */

if (!isset($_SESSION['trainings'])){
	$_SESSION['trainings'] = array();
}

if (isset($_GET['course'])){
	$course_name = $_GET['course'];
	//$_SESSION['secschname'] = $secsch_name;
}

if (isset($_GET['cert'])){
	$certificate = $_GET['cert'];
	//$_SESSION['yroentry'] = $secsch_entry_yr;
}

if (isset($_GET['from'])){
	$from_yr = $_GET['from'];
	//$_SESSION['yrograd'] = $secsch_grad_yr;
}

if (isset($_GET['to'])){
	$to_yr = $_GET['to'];
	//$_SESSION['secqual'] = $secsch_qual;
}

if(!empty($course_name)){
	//session_destroy();
	//$_SESSION['trainings'] = array();
	$_SESSION['trainings'][] = array(
			'course_name' => $course_name, //$_SESSION['secschname'],
			'certificate' => $certificate, //$_SESSION['yroentry'],
			'from_yr' => $from_yr, //$_SESSION['yrograd'],
			'to_yr' => $to_yr, //$_SESSION['secqual'],
		);

	// this is the json variable for training
	// mike put this into CI Session.
	echo $training_json = json_encode( $_SESSION['trainings']);
	$this->set->session_userdata($training_json);

}



if (isset($_GET['del_sec_sch'])){
	$sec_sch_name = $_GET['del_sec_sch'];
	$sec_schs = json_decode($_SESSION['secondary_fields'], true);
	$sec_schs = remove_item_with_value($sec_schs, "secsch_name", $sec_sch_name);
	$_SESSION['sec_sch'] = $sec_schs;
	echo $_SESSION['secondary_fields'] = json_encode($sec_schs);
}

if (isset($_GET['del_tert_sch'])){
	$tert_sch_name = $_GET['del_tert_sch'];
	$tert_schs = json_decode($_SESSION['tertiary_fields'], true);
	$tert_schs = remove_item_with_value($tert_schs, "notersch", $tert_sch_name);
	$_SESSION['tert_sch'] = $tert_schs;
	echo $_SESSION['tertiary_fields'] = json_encode($tert_schs);
}

if (isset($_GET['del_trainig'])){
	$training_name = $_GET['del_trainig'];
	$trainings = json_decode($_SESSION['training_fields'], true);
	$trainings = remove_item_with_value($trainings, "course_name", $training_name);
	$_SESSION['trainings'] = $trainings;
	echo $_SESSION['training_fields'] = json_encode($trainings);
}


?>