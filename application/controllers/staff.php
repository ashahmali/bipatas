<?php
class Staff extends CI_Controller{

	var $staff_id;

	function __construct(){
		parent::__construct();
		session_start();
		$this->is_logged_in();

		$this->staff_id = $this->session->userdata('id');
	}




	function index(){

		$this->load->model('personal_information_model');
		$this->load->model('employment_record_model');
		$this->load->model('educational_qualification_model');
		$this->load->model('bank_details_model');
		$this->load->model('training_record_model');

		//let's inlude all models first.
		$p_info 	= $this->personal_information_model->find_by_id($this->staff_id);
		$e_record 	= $this->employment_record_model->find_by_personal_record_id($this->staff_id);
		$e_qual 	= $this->educational_qualification_model->find_by_personal_record_id($this->staff_id);
		$b_details 	= $this->bank_details_model->find_by_personal_record_id($this->staff_id);
		$training 	= $this->training_record_model->find_by_personal_record_id($this->staff_id);
		//Next, let's start setting variables from each model.


		//Personal information model
		$data['firstName'] 		= $this->session->userdata('fname');
		$data['middleName'] 	= $this->session->userdata('mname');
		$data['surname'] 		= $this->session->userdata('sname');
		$data['full_name'] 		= $this->session->userdata('full_name');

		$data['title']			= $p_info->p_title;
		$data['sex']			= $p_info->sex;
		$data['maidenName']		= isset($p_info->maidname) ? $p_info->maidname : '';
		$data['dateChangeName'] = isset($p_info->don) ? $p_info->don : '';
		$data['height']			= $p_info->height;
		$data['phone']			= $p_info->phone;
    	$data['dob']			= $p_info->dob;
		$data['mstatus']		= $p_info->mstatus;
		$data['religion']		= $p_info->religion;
		$data['street'] 		= $p_info->street;
		$data['city'] 			= $p_info->city;
		$data['state'] 			= $p_info->state;
		$data['lga']			= $p_info->lga;
    	$data['bgroup'] 		= $p_info->bgroup;
		$data['rhesus'] 		= $p_info->rhesus;
		$data['nextKinname'] 	= $p_info->noksn;
		$data['nextKinOname'] 	= $p_info->nokon;
		$data['nextKinAddr'] 	= $p_info->nokad_street;
		$data['nextKinCity'] 	= $p_info->nokad_city;
		$data['nextKinRship']	= $p_info->rship;
		$data['nextKinPhone'] 	= $p_info->nokpn;

		//employment record model
		$data['ministryId'] 	= $e_record->minname;
		//data['$minname']		= $e_record->minname;
		$data['ministryAddstr']	= $e_record->minaddstr;
		$data['ministryCity']	= $e_record->mincity;
		$data['govttier']		= $e_record->govttier;
		$data['jobTitle']		= $e_record->jtitle;
		$data['dateofEmp']		= $e_record->doemp;
		$data['dateofProm']		= $e_record->doprom;
		$data['slaryStruct']	= $e_record->salstruct;
	    $data['gradeLev']		= $e_record->glevel;
		$data['step'] 			= $e_record->step;
		$data['netSalary'] 		= $e_record->netsal;
		$data['lgaofWork'] 		= $e_record->lgaofwork;
		$data['stafType'] 		= $e_record->stype;

		//Educational qualification model
		$data['primarySchlName']	= isset($e_qual->noprisch) 	? $e_qual->noprisch : "";
		$data['yearEnterPrim']		= isset($e_qual->pyoentry) 	? $e_qual->pyoentry : "";
		$data['yearPrimGrad']		= isset($e_qual->pyograd) 	? $e_qual->pyograd 	: "";
		$data['primQual']			= isset($e_qual->pqualobt) 	? $e_qual->pqualobt : "";
    	$data['scdrySchlName']		= isset($e_qual->nosecsch) 	? $e_qual->nosecsch : "";
		$_SESSION['sec_sch_json'] 	= isset($e_qual->nosecsch) 	? $e_qual->nosecsch : "";
		$data['TatiarySchlName']	= isset($e_qual->notersch) 	? $e_qual->notersch : "";
		$_SESSION['ter_sch_json']	= isset($e_qual->notersch) 	? $e_qual->notersch : "";
		$data['nyscNum'] 			= isset($e_qual->nysc) 		? $e_qual->nysc 	: "";

		//Bank details model
    	$data['nameBank']		= isset($b_details->nobank) ? $b_details->nobank : '';
		$data['bankBranch']		= isset($b_details->bsbranch) ? $b_details->bsbranch : '';
		$data['bankCity']		= isset($b_details->bcbranch) ? $b_details->bcbranch : '';
		$data['banklgabranch']	= isset($b_details->blbranch) ? $b_details->blbranch : '';
		$data['baccType']		= isset($b_details->bacctype) ? $b_details->bacctype : '';
		$data['accType']		= isset($b_details->accnotype) ? $b_details->accnotype : '';
    	$data['accNo']			= isset($b_details->acctno) ? $b_details->acctno : '';
		$data['accname']		= isset($b_details->accname) ? $b_details->accname : '';

		//Training model
		$data['trainingCourse'] 	= $training->tracourse;
		$_SESSION['training_json']	= $training->tracourse;

		$this->load->view('pages/staff', $data);
	}



	function print_page(){

		$this->load->model('personal_information_model');
		$this->load->model('employment_record_model');
		$this->load->model('educational_qualification_model');
		$this->load->model('bank_details_model');
		$this->load->model('training_record_model');

		//let's inlude all models first.
		$p_info 	= $this->personal_information_model->find_by_id($this->staff_id);
		$e_record 	= $this->employment_record_model->find_by_personal_record_id($this->staff_id);
		$e_qual 	= $this->educational_qualification_model->find_by_personal_record_id($this->staff_id);
		$b_details 	= $this->bank_details_model->find_by_personal_record_id($this->staff_id);
		$training 	= $this->training_record_model->find_by_personal_record_id($this->staff_id);
		//Next, let's start setting variables from each model.


		//Personal information model
		$data['firstName'] 		= $this->session->userdata('fname');
		$data['middleName'] 	= $this->session->userdata('mname');
		$data['surname'] 		= $this->session->userdata('sname');
		$data['full_name'] 		= $this->session->userdata('full_name');

		$data['title']			= $p_info->p_title;
		$data['sex']			= $p_info->sex;
		$data['maidenName']		= isset($p_info->maidname) ? $p_info->maidname : '';
		$data['dateChangeName'] = isset($p_info->don) ? $p_info->don : '';
		$data['height']			= $p_info->height;
		$data['phone']			= $p_info->phone;
    	$data['dob']			= $p_info->dob;
		$data['mstatus']		= $p_info->mstatus;
		$data['religion']		= $p_info->religion;
		$data['street'] 		= $p_info->street;
		$data['city'] 			= $p_info->city;
		$data['state'] 			= $p_info->state;
		$data['lga']			= $p_info->lga;
    	$data['bgroup'] 		= $p_info->bgroup;
		$data['rhesus'] 		= $p_info->rhesus;
		$data['nextKinname'] 	= $p_info->noksn;
		$data['nextKinOname'] 	= $p_info->nokon;
		$data['nextKinAddr'] 	= $p_info->nokad_street;
		$data['nokad_city'] 	= $p_info->nokad_city;
		$data['nextKinRship']	= $p_info->rship;
		$data['nextKinPhone'] 	= $p_info->nokpn;

		//employment record model
		$data['ministryId'] 	= $e_record->minname;
		//data['$minname']		= $e_record->minname;
		$data['ministryAddstr']	= $e_record->minaddstr;
		$data['ministryCity']	= $e_record->mincity;
		$data['govttier']		= $e_record->govttier;
		$data['jobTitle']		= $e_record->jtitle;
		$data['dateofEmp']		= $e_record->doemp;
		$data['dateofProm']		= $e_record->doprom;
		$data['slaryStruct']	= $e_record->salstruct;
	    $data['gradeLev']		= $e_record->glevel;
		$data['step'] 			= $e_record->step;
		$data['netSalary'] 		= $e_record->netsal;
		$data['lgaofWork'] 		= $e_record->lgaofwork;
		$data['stafType'] 		= $e_record->stype;

		//Educational qualification model
		$data['primarySchlName']	= isset($e_qual->noprisch) 	? $e_qual->noprisch : "";
		$data['yearEnterPrim']		= isset($e_qual->pyoentry) 	? $e_qual->pyoentry : "";
		$data['yearPrimGrad']		= isset($e_qual->pyograd) 	? $e_qual->pyograd 	: "";
		$data['primQual']			= isset($e_qual->pqualobt) 	? $e_qual->pqualobt : "";
    	$data['scdrySchlName']		= isset($e_qual->nosecsch) 	? $e_qual->nosecsch : "";
		$data['TatiarySchlName']	= isset($e_qual->notersch) 	? $e_qual->notersch : "";
		$data['nyscNum'] 			= isset($e_qual->nysc) 		? $e_qual->nysc 	: "";

		//Bank details model
    	$data['nameBank']		= $b_details->nobank;
		$data['bankBranch']		= $b_details->bsbranch;
		$data['bankCity']		= $b_details->bcbranch;
		$data['banklgabranch']	= $b_details->blbranch;
		$data['baccType']		= $b_details->bacctype;
		$data['accType']		= $b_details->accnotype;
    	$data['accNo']			= $b_details->acctno;
		$data['accname']		= $b_details->accname;

		//Training model
		$data['trainingCourse'] = $training->tracourse;


		$this->load->view('pages/print', $data);

	}


	function is_logged_in(){

			$val1 = $this->session->userdata('id');
			$document_id = $this->session->userdata('id');

			if(!isset($document_id) || $this->session->userdata('is_logged_in') != true){

				$this->session->sess_destroy();
				redirect('home');
				exit();

			}
	}

function fetch_edu_data($which){
	$sec_sch =  (!empty($_SESSION['sec_sch_json'])) ? $_SESSION['sec_sch_json'] : " ";

	$ter_sch = (!empty($_SESSION['ter_sch_json'])) ? $_SESSION['ter_sch_json'] : " ";

	$training = (!empty($_SESSION['training_json'])) ? $_SESSION['training_json'] : " ";

	switch ($which) {
		case 1:
			echo $sec_sch;
			break;
		case 2:
			echo $ter_sch;
			break;
		case 3:
			echo $training;
			break;
		default:
			echo "";
			break;
		}
}


function personal_information(){

	//first load the model associated with this controller
	$this->load->model('personal_information_model');
	$this->load->model('others');

	//get all states list
		$data['state_lists']	= $this->others->get_all_states();

		//validate all required fields first
		$this->form_validation->set_rules('p_title', 'Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sname', 'Surname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|xss_clean');
		$this->form_validation->set_rules('height', 'Height', 'trim|required|numeric|less_than[2.8]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone number', 'trim|required|numeric|min_length[11]|max_length[13]|xss_clean');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mstatus', 'Marital Status', 'trim|required|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'trim|required|xss_clean');
		$this->form_validation->set_rules('street', 'Street Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'Resident City Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state', 'State of Origin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lga', 'LGA of Origin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bgroup', 'Blood group', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rhesus', 'Blood Group rhesus ', 'trim|required|xss_clean');
		$this->form_validation->set_rules('noksn', 'Next of Kin\'s Surnmame', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokon', 'Next of Kin\'s Other Names', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokad_street', 'Next of Kin\'s Street Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokad_city', 'Next of Kin\'s City of residence', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rship', 'Relationship with Next of Kin', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nokpn', 'Next of Kin\'s Phone Number', 'trim|required|numeric|min_length[11]|max_length[13]|xss_clean');


		//let's check and see if validation was performed successfully.
		if($this->form_validation->run() == FALSE){
			//validation failed!
			$this->index();
		}else{//validation succeded. Let's put post values into array

				//set the session array variables here
		$p_info_update['p_title'] 		= $this->input->post('p_title');
		$p_info_update['fname'] 		= $this->input->post('fname');
		$p_info_update['sname'] 		= $this->input->post('sname');
		$p_info_update['sex'] 			= $this->input->post('sex');
		$p_info_update['height'] 		= $this->input->post('height');
		$p_info_update['phone'] 		= $this->input->post('phone');
		$p_info_update['dob'] 			= $this->input->post('dob');
		$p_info_update['mstatus'] 		= $this->input->post('mstatus');
		$p_info_update['maidname'] 		= $this->input->post('maidname');
		$p_info_update['don'] 			= $this->input->post('don');
		$p_info_update['religion'] 		= $this->input->post('religion');
		$p_info_update['street'] 		= $this->input->post('street');
		$p_info_update['city'] 			= $this->input->post('city');
		$p_info_update['state'] 		= $this->input->post('state');
		$p_info_update['lga'] 			= $this->input->post('lga');
		$p_info_update['bgroup'] 		= $this->input->post('bgroup');
		$p_info_update['rhesus'] 		= $this->input->post('rhesus');
		$p_info_update['noksn'] 		= $this->input->post('noksn');
		$p_info_update['nokon'] 		= $this->input->post('nokon');
		$p_info_update['nokad_street'] 	= $this->input->post('nokad_street');
		$p_info_update['nokad_city'] 	= $this->input->post('nokad_city');
		$p_info_update['rship'] 		= $this->input->post('rship');
		$p_info_update['nokpn'] 		= $this->input->post('nokpn');

			//now update personal info record
			if($this->personal_information_model->update($this->staff_id, $p_info_update)){
				//update succeded
					$this->index();
			}else{
				//updat failed, let's reload form
			$this->load->view('partials/p_info_form');

			}
		}

	}


	function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('fname');
		$this->session->unset_userdata('mname');
		$this->session->unset_userdata('sname');
		$this->session->unset_userdata('full_name');

		session_destroy();
		$this->session->sess_destroy();
		redirect('home');
	}
















}