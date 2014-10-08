<?php
class Register extends CI_Controller {

	function __construct(){
		parent::__construct();


		$this->is_logged_in();

	}
	
	var $id;

function personal_information(){
	
	//first load the model associated with this controller
	$this->load->model('personal_information_model');
	//the 'others' model will help with State and LGAs fields
	$this->load->model('others');
	$data['all_states'] = $this->others->get_all_states();
	//get LGAs to display should there is error after form submission.
	$data['lga_of_choosen_state'] = $_SERVER["REQUEST_METHOD"] == "POST" ? $this->others->get_lgas_of_selected_state($this->input->post('state')) : '';
	
		//Change the Error delimeter
		$this->form_validation->set_error_delimiters('<p style="color:red;">* ', '</p>');

		//validate all required fields first
		$this->form_validation->set_rules('p_title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sname', 'Surname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|xss_clean');
		$this->form_validation->set_rules('height', 'Height', 'trim|required|numeric|less_than[2.8]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone number', 'trim|required|numeric|exact_length[11]|xss_clean');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mstatus', 'Marital Status', 'trim|required|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'trim|required|xss_clean');
		$this->form_validation->set_rules('street', 'Street Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'Resident City Name', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('state', 'State of Origin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lga', 'LGA of Origin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bgroup', 'Blood group', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rhesus', 'Blood Group rhesus ', 'trim|required|xss_clean');
		$this->form_validation->set_rules('noktitle', 'Next of kin\'s title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('noksn', 'Next of Kin\'s Surnmame', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokfname', 'Next of kin\'s First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokon', 'Next of Kin\'s Other Names', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokad_street', 'Next of Kin\'s Street Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokad_city', 'Next of Kin\'s City of residence', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rship', 'Relationship with Next of Kin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokpn', 'Next of Kin\'s Phone Number', 'trim|required|numeric|min_length[11]|max_length[13]|xss_clean');


		//let's check and see if validation was performed successfully.
		if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->load->view('pages/p_info', $data);

		}else{//validation succeded. let's put post values into session
			$lga = $this->others->get_laga_name($this->input->post('lga'));
			$state = $this->others->get_state_name($this->input->post('state'));

				//set the session array variables here
		$bipatas['p_title'] 		= $this->input->post('p_title');
		$bipatas['fname'] 			= $this->input->post('fname');
		$bipatas['sname'] 			= $this->input->post('sname');
		$bipatas['sex'] 			= $this->input->post('sex');
		$bipatas['height'] 			= $this->input->post('height');
		$bipatas['phone'] 			= $this->input->post('phone');
		$bipatas['dob'] 			= $this->input->post('dob');
		$bipatas['mstatus'] 		= $this->input->post('mstatus');
		$bipatas['maidname'] 		= $this->input->post('maidname');
		$bipatas['don'] 			= $this->input->post('don');
		$bipatas['religion'] 		= $this->input->post('religion');
		$bipatas['street'] 			= $this->input->post('street');
		$bipatas['city'] 			= $this->input->post('city');
		$bipatas['state'] 			= $state;
		$bipatas['lga'] 			= $lga;
		$bipatas['bgroup'] 			= $this->input->post('bgroup');
		$bipatas['rhesus'] 			= $this->input->post('rhesus');
		$bipatas['noktitle'] 		= $this->input->post('noktitle');
		$bipatas['noksn'] 			= $this->input->post('noksn');
		$bipatas['nokfname'] 		= $this->input->post('nokfname');
		$bipatas['nokon'] 			= $this->input->post('nokon');
		$bipatas['nokad_street'] 	= $this->input->post('nokad_street');
		$bipatas['nokad_city'] 		= $this->input->post('nokad_city');
		$bipatas['rship'] 			= $this->input->post('rship');
		$bipatas['nokpn'] 			= $this->input->post('nokpn');

		//do the session setting here
		$this->session->set_userdata($bipatas);
				//confirm that important session fields are set and them redirect to next form page
			if($this->session->userdata('sex') && $this->session->userdata('nokpn')){

					redirect('register/employment_record');
			}else{
				//important session fields were not set, reload this form.
			$this->load->view('pages/p_info', $data);

			}
		}

	}




function employment_record(){
	//first load the model associated with this controller
	$this->load->model('employment_record_model');
	$this->load->model('others');

	//let's load the list of ministries model that we will use in the form.
	$data['ministry'] = $this->get_ministries();
	//let's also load the all Deltastate LGAs 
	$data['delta_state_lgas'] = $this->others->get_all_delta_state_lga();

	//Change the Error delimeter
		$this->form_validation->set_error_delimiters('<p style="color:red;">* ', '</p>');
	//validate all required fields first
		$this->form_validation->set_rules('minname', 'Ministry Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('minaddstr', 'Ministry\'s Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mincity', 'city where Ministry is located', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('govttier', 'Arm of Government', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lgaofwork', 'LGA of Work', 'trim|required|xss_clean');
		$this->form_validation->set_rules('jtitle', 'Job title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('doemp', 'Date of First Appointment', 'trim|required|xss_clean');
		$this->form_validation->set_rules('doprom', 'Date of last promotion', 'trim|xss_clean');
		$this->form_validation->set_rules('salstruct', 'Salary Structure', 'trim|required|xss_clean');
		$this->form_validation->set_rules('glevel', 'Grade Level', 'trim|required|xss_clean');
		$this->form_validation->set_rules('step', 'Step in grade leve', 'trim|required|xss_clean');
		$this->form_validation->set_rules('netsal', 'Net Monthly Salary', 'trim|required|is_natural_no_zero|greater_than[5000]|xss_clean');
		$this->form_validation->set_rules('stype', 'Staff type', 'trim|required|xss_clean');



		//let's check and see if validation was performed successfully.
		if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->load->view('pages/e_records', $data);

		}else{//validation succeeded. let's put post values into session

				$bipatas['personal_record_id'] 	= $this->session->userdata('id');
				$bipatas['minname'] 			= $this->session->userdata('staff_ministry_acronym');
				$bipatas['minaddstr'] 			= $this->input->post('minaddstr');
				$bipatas['mincity'] 			= $this->input->post('mincity');
				$bipatas['govttier'] 			= $this->input->post('govttier');
				$bipatas['lgaofwork'] 			= $this->input->post('lgaofwork');
				$bipatas['jtitle'] 				= $this->input->post('jtitle');
				$bipatas['doemp'] 				= $this->input->post('doemp');
				$bipatas['doprom'] 				= $this->input->post('doprom');
				$bipatas['salstruct'] 			= $this->input->post('salstruct');
				$bipatas['glevel'] 				= $this->input->post('glevel');
				$bipatas['step'] 				= $this->input->post('step');
				$bipatas['netsal'] 				= $this->input->post('netsal');
				$bipatas['stype'] 				= $this->input->post('stype');

				//do the session setting here
				$this->session->set_userdata($bipatas);
					//confirm that important session fields are set and then redirect to next form page
				if($this->session->userdata('minaddstr') && $this->session->userdata('stype')){

						redirect('register/educational_qualification');
				}else{
					//important session fields were not set, reload this form.
				$this->load->view('pages/e_records', $data);

				}
			}


}




function educational_qualification(){
	//first load the model associated with this controller
	$this->load->model('educational_qualification_model');
	
	//Change the Error delimeter
		$this->form_validation->set_error_delimiters('<p style="color:red;">* ', '</p>');

	//validate all required fields first
		$this->form_validation->set_rules('noprisch', 'Name of Primary school', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pyoentry', 'year of primary school entry', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pyograd', 'year you graduated form primary school', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pqualobt', 'Qualification obtained in primary school', 'trim|required|xss_clean');



		//let's check and see if validation was performed successfully.
		if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->load->view('pages/e_qual');

		}else{//validation succeeded. let's put post values into session				$this->ajax_call();
				$bipatas['noprisch'] 		= $this->input->post('noprisch');
				$bipatas['pyoentry'] 		= $this->input->post('pyoentry');
				$bipatas['pyograd']		 	= $this->input->post('pyograd');
				$bipatas['pqualobt'] 		= $this->input->post('pqualobt');
				//$bipatas['nosecsch'] 		= $this->input->post('nosecsch');				$bipatas['nosecsch']        =  isset($_SESSION['sec_sch_json']) ? $_SESSION['sec_sch_json'] : '';
				// $bipatas['notersch'] 		= $this->input->post('notersch');				$bipatas['notersch']        =  isset($_SESSION['ter_sch_json']) ? $_SESSION['ter_sch_json'] : '';
				$bipatas['nysc'] 			= $this->input->post('nysc');

			//do the session setting here
				$this->session->set_userdata($bipatas);
					//confirm that important session fields are set and then redirect to next form page
				if($this->session->userdata('noprisch') && $this->session->userdata('pqualobt')){

					redirect('register/bank_details');
			}else{
				//important session fields were not set, reload this form.
			$this->load->view('pages/e_qual');

			}
		}

}


function bank_details(){

	//first load the model associated with this controller
	$this->load->model('bank_details_model');
	$this->load->model('others');
	//Let's get a list of all Commercial Banks in Nigeria
	$data['all_bank_names'] = $this->others->get_all_banks();
	//let's also load the all Deltastate LGAs 
	$data['delta_state_lgas'] = $this->others->get_all_delta_state_lga();

	//Change the Error delimeter
		$this->form_validation->set_error_delimiters('<p style="color:red;">* ', '</p>');
	//validate all required fields first
		$this->form_validation->set_rules('nobank', 'Bank Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bcbranch', 'Bank branch', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('bsbranch', 'Stree of Bank branch', 'trim|required|xss_clean');
		$this->form_validation->set_rules('blbranch', 'LGA of Bank branch', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bacctype', 'Bank Account Type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('accnotype', 'Account number type', 'trim|required');
		$this->form_validation->set_rules('acctno', 'Account number', 'trim|required|integer|exact_length[9]|xss_clean');
		$this->form_validation->set_rules('accname', 'Account Name', 'trim|required|xss_clean');


		//let's check and see if validation was performed successfully.
		if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->load->view('pages/b_details', $data);

		}else{//validation succeeded. let's put post values into session

				$bipatas['nobank'] = $this->input->post('nobank');
				$bipatas['bcbranch'] = $this->input->post('bcbranch');
				$bipatas['bsbranch'] = $this->input->post('bsbranch');
				$bipatas['blbranch'] = $this->input->post('blbranch');
				$bipatas['bacctype'] = $this->input->post('bacctype');
				$bipatas['accnotype'] = $this->input->post('accnotype');
				$bipatas['acctno'] = $this->input->post('acctno');
				$bipatas['accname'] = $this->input->post('accname');
			//do the session setting here
				$this->session->set_userdata($bipatas);
			//confirm that important session fields are set and then redirect to next form page
				if($this->session->userdata('nobank') && $this->session->userdata('accname')){

					redirect('register/training_record');
			}else{
				//important session fields were not set, reload this form.
			$this->load->view('pages/b_details', $data);
			}
		}


}



function training_record(){
	//first load the model associated with this controller
	$this->load->model('training_record_model');

	//$post_fields = array('tracourse', 'tracert', 'fyear', 'tyear');
	//Array of all required fields in this page
	//$required_fields = array();

	//validate all required fields first
		$this->form_validation->set_rules('tracourse', 'Training Course');
		//$this->form_validation->set_rules('', '', '');


		//let's check and see if validation was performed successfully.
		 if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->load->view('pages/training');

		}else{//validation succeeded. let's put post values into session
				$this->ajax_call();
				$bipatas['tracourse'] = isset($_SESSION['training_json']) ? $_SESSION['training_json'] : '';


			//do the session setting here
				$this->session->set_userdata($bipatas);
			//confirm that important session fields are set and then redirect to next form page
				redirect('register/create_staff');

			}
				//session setting failed, reload this form.
			//$this->load->view('pages/training');


		}




function create_staff(){	//$this->session->sess_destroy();
		//let's start with personal information
	$this->load->model('personal_information_model');
	$this->load->model('employment_record_model');
	$this->load->model('educational_qualification_model');
	$this->load->model('bank_details_model');
	$this->load->model('training_record_model');
	$this->load->model('log_count_model');

	$p_info_data = array(
		'p_title'			=> $this->session->userdata('p_title'),
		'fname' 			=> $this->session->userdata('fname'),
		'mname'				=> $this->session->userdata('mname'),
		'sname' 			=> $this->session->userdata('sname'),
		'sex' 				=> $this->session->userdata('sex'),
		'maidname' 			=> $this->session->userdata('maidname'),
		'don' 				=> $this->session->userdata('don'),
		'height' 			=> $this->session->userdata('height'),
		'phone' 			=> $this->session->userdata('phone'),
		'dob' 				=> $this->session->userdata('dob'),
		'mstatus' 			=> $this->session->userdata('mstatus'),
		'religion' 			=> $this->session->userdata('religion'),
		'street' 			=> $this->session->userdata('street'),
		'city' 				=> $this->session->userdata('city'),
		'state' 			=> $this->session->userdata('state'),
		'lga' 				=> $this->session->userdata('lga'),
		'bgroup' 			=> $this->session->userdata('bgroup'),
		'rhesus' 			=> $this->session->userdata('rhesus'),
		'noktitle'			=> $this->session->userdata('noktitle'),
		'noksn' 			=> $this->session->userdata('noksn'),
		'nokfname'			=> $this->session->userdata('nokfname'),
		'nokon' 			=> $this->session->userdata('nokon'),
		'nokad_street' 		=> $this->session->userdata('nokad_street'),
		'nokad_city' 		=> $this->session->userdata('nokad_city'),
		'rship' 			=> $this->session->userdata('rship'),
		'nokpn' 			=> $this->session->userdata('nokpn'),
		'validate' 			=> 1,
		'reg_date'			=> date('d-m-Y  h:i A', time()),
	);



	$e_records_data = array(
		'minname'		=> $this->session->userdata('staff_ministry_acronym'),
		'minaddstr'		=> $this->session->userdata('minaddstr'),
		'mincity'		=> $this->session->userdata('mincity'),
		'govttier'		=> $this->session->userdata('govttier'),
		'file_no'		=> $this->session->userdata('file_no'),
		'jtitle'		=> $this->session->userdata('jtitle'),
		'doemp'			=> $this->session->userdata('doemp'),
		'doprom'		=> $this->session->userdata('doprom'),
		'salstruct'		=> $this->session->userdata('salstruct'),
		'glevel'		=> $this->session->userdata('glevel'),
		'step'			=> $this->session->userdata('step'),
		'netsal'		=> $this->session->userdata('netsal'),
		'lgaofwork'		=> $this->session->userdata('lgaofwork'),
		'netsal'		=> $this->session->userdata('netsal'),
		'stype'			=> $this->session->userdata('stype'),
		);
	$this->ajax_call();
	$e_qual_data = array(
		'personal_record_id' 	=> $this->session->userdata('id'),
		'noprisch'				=> $this->session->userdata('noprisch'),
		'pyoentry'				=> $this->session->userdata('pyoentry'),
		'pyograd'				=> $this->session->userdata('pyograd'),
		'pqualobt'				=> $this->session->userdata('pqualobt'),
		'nosecsch'				=>  isset($_SESSION['sec_sch_json']) ? $_SESSION['sec_sch_json'] : '', //$this->session->userdata('sec_sch_json'),
		'notersch'				=>  isset($_SESSION['ter_sch_json']) ?  $_SESSION['ter_sch_json'] : '', //$this->session->userdata('ter_sch_json'),
		'nysc'					=> $this->session->userdata('nysc')
		 );


	$b_details_data = array(
		'personal_record_id' 	=> $this->session->userdata('id'),
		'nobank' 				=> $this->session->userdata('nobank'),
		'bsbranch' 				=> $this->session->userdata('bsbranch'),
		'bcbranch' 				=> $this->session->userdata('bcbranch'),
		'blbranch' 				=> $this->session->userdata('blbranch'),
		'bacctype' 				=> $this->session->userdata('bacctype'),
		'accnotype' 			=> $this->session->userdata('accnotype'),
		'acctno' 				=> $this->session->userdata('acctno'),
		'accname' 				=> $this->session->userdata('accname'),
		);




	$training_data = array(
		'personal_record_id' 	=> $this->session->userdata('id'),
		'tracourse' 			=>   isset($_SESSION['training_json']) ? $_SESSION['training_json'] : '', //$this->session->userdata('training_json')
		);


	$log_count_data = array(
			'personal_record_id'	=> $this->session->userdata('id'),
			'log'					=> 0,
			'log_date'				=> date('d-m-Y  h:i A', time()),
		);

	if(
		$this->training_record_model->create($training_data) &&
		$this->bank_details_model->create($b_details_data) &&
		$this->educational_qualification_model->create($e_qual_data)&&
		$this->employment_record_model->update($this->session->userdata('id'), $e_records_data) &&
		$this->personal_information_model->update($this->session->userdata('id'), $p_info_data) &&
		$this->log_count_model->create($log_count_data)
		)
	{

		redirect('staff/print_page');
		exit();
/*
			foreach($this->session->all_userdata() as $key => $val){
		echo '<strong style="text-align:center">'.$key.": ".$val."<br /></strong>";
				}
*/
	}else{
		echo "<h1> Updated Failed!</h1>";
		}

}



	function is_logged_in(){

			$val1 = $this->session->userdata('id');
			$document_id = $this->session->userdata('id');

			if(!isset($document_id) || $this->session->userdata('is_logged_in') != true){

				redirect(base_url());
				$this->session->sess_destroy();
				exit();

			}
		}


   function update(){


    }









function get_ministries() {
		$this->load->model('Ministries_model');
		return $this->Ministries_model->getAll();
	}
function ajax_call(){
	session_start();
		//$this->session->set_userdata('some_name', 'some_value');
		//$this->session->userdata('item');
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

		//$sec_sch_json = json_encode( $_SESSION['sec_sch']);
		//$this->session->set_userdata('sec_sch_json', $sec_sch_json);
		//echo $this->session->userdata('sec_sch_json');
		echo $_SESSION['sec_sch_json'] = json_encode( $_SESSION['sec_sch']);



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
		echo $_SESSION['ter_sch_json'] = json_encode($_SESSION['tert_sch']);

		//$ter_sch_json = json_encode( $_SESSION['tert_sch']);
		//$this->session->set_userdata('ter_sch_json', $ter_sch_json);
		//echo $this->session->userdata('ter_sch_json');

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
		echo $_SESSION['training_json'] = json_encode( $_SESSION['trainings']);

		//$training_json = json_encode( $_SESSION['trainings']);
		//$this->session->set_userdata('training_json', $training_json);
		//echo $this->session->userdata('training_json');


	}




	if (isset($_GET['del_sec_sch'])){
		$sec_sch_name = $_GET['del_sec_sch'];
		$sec_schs = json_decode($_SESSION['sec_sch_json'], true);
		$sec_schs = remove_item_with_value($sec_schs, "secsch_name", $sec_sch_name);
		$_SESSION['sec_sch'] = $sec_schs;
		echo $_SESSION['secondary_fields'] = json_encode($sec_schs);
	}

	if (isset($_GET['del_tert_sch'])){
		$tert_sch_name = $_GET['del_tert_sch'];
		$tert_schs = json_decode($_SESSION['ter_sch_json'], true);
		$tert_schs = remove_item_with_value($tert_schs, "notersch", $tert_sch_name);
		$_SESSION['tert_sch'] = $tert_schs;
		echo $_SESSION['tertiary_fields'] = json_encode($tert_schs);
	}

	if (isset($_GET['del_trainig'])){
		$training_name = $_GET['del_trainig'];
		$trainings = json_decode($_SESSION['training_json'], true);
		$trainings = remove_item_with_value($trainings, "course_name", $training_name);
		$_SESSION['trainings'] = $trainings;
		echo $_SESSION['training_fields'] = json_encode($trainings);
	}

}

	function get_lgas_of_selected_state(){
		$this->load->model('others');
		if(isset($_GET['lgas'])){
			$id = $_GET['lgas'];
			$this->load->model('others');
			$lgas = $this->others->get_lgas_of_selected_state($id);
			echo '<option value="">LGA of Origin</option>';
			foreach($lgas as $lga){
				echo '<option ';
				echo "set_select('lga', $lga->id)";
				echo ' value="'.$lga->id.'">'.$lga->name.'</option>';
			}
			
		}
		
	}
	
	
	


}




