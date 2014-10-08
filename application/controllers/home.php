<?php

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		//preload the some models
		$this->load->model('personal_information_model');
		$this->load->model('employment_record_model');
		$this->load->model('log_count_model');

		}	
		var $is_logged_in = false;
		
	function index(){
		//let's load the list of ministries model that we will use in the form.
		$data['ministry'] = $this->get_ministries();
		$this->load->view('index', $data);
	}
	
	
	function login() {
		//let's load the list of ministries model that we will use in the form.
		$data['ministry'] = $this->get_ministries();
		//Here, I want to change how my form errors are displayed
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">* ', '</div>');

		//start validatin login fields
		$this->form_validation->set_rules('minname', 'Ministry/Dept/Agency', 'trim|required|xss_clean');
		$this->form_validation->set_rules('did', 'User ID', 'trim|required|alpha_numeric|required|exact_length[10]|strtoupper|xss_clean');
		$this->form_validation->set_rules('pin', 'Passcode', 'trim|required|alpha_numeric|xss_clean');

		if($this->form_validation->run() == FALSE){
			//login field validation failed, reload login form.
			$this->index();
		}else{
			//validation successfull
			//Now, confirm staff existence on database
			if(!$this->personal_information_model->confirm_staff_existence($this->input->post('did'), $this->input->post('pin'))){
				//staff not foune in db, reload form with errors an list of ministries dropdown.
				$data['ministry'] = $this->get_ministries();
				$data['error'] = "Your User ID and Passcode DO NOT MATCH or DO NOT EXISTS in the database. Try again OR ".anchor('#', '<button>click here for complaint!</button>');
				$this->load->view('index', $data);
			}else{
				//staff exists on db
				//Now, let's see that selected ministry is the same as in employment record and same person
					$staffmin = $this->employment_record_model->find_by_ministry_acronym_for_loginform($this->input->post('minname'), $this->input->post('did'));
					$pass_pin_match = $staffmin != null ? $staffmin->personal_record_id : '';
				if($this->input->post('did') != $pass_pin_match){

				//Document_id and ministry do not match
				//Let's reload login form with the staff's details.
				$user = $this->personal_information_model->find_by_id($this->input->post('did'));
				$this->personal_information_model->fname = $user->fname;
				$this->personal_information_model->mname = $user->mname;
				$this->personal_information_model->sname = $user->sname;

				$data['ministry'] = $this->get_ministries();
				$selected_min = $this->Ministries_model->find_by_acronym($this->input->post('minname'));
				$data['error'] = '<strong>'.$this->personal_information_model->full_name().'</strong>'.
					" <br />You DO NOT belong to '".'<strong style="color:#C20D06; ">'.$selected_min->name.'.</strong>'.
					"' Confirm your Ministry and try again OR ".anchor('#', '<button>click here for complaint!</button>');
				$this->load->view('index', $data);

				}else{

			//Now, let's confirm if staff has already registered,
			$reg = $this->personal_information_model->confirm_staff_already_registered($this->input->post('did'));

			if($reg->validate == 1){
				//this staff has already registered
				
				//let's confirm log count first
				$log_count = $this->log_count_model->find_by_personal_record_id($this->input->post('did'));
				if($log_count->log >= 2){

					//Staff has exceeded log count
					$data['error_message'] = "You have exceeded the log count! Pay #5000 to the Bank!";
					$this->load->view('partials/error', $data);


				}else{

					//Staff has NOT exceeded log county

				//let's set session and then
				//redirect him to the staff page, where he can see all his records and edit them.

				//we first get the details of this staff and put them in session.
				$user = $this->personal_information_model->find_by_id($this->input->post('did'));
				$this->personal_information_model->fname = $user->fname;
				$this->personal_information_model->mname = $user->mname;
				$this->personal_information_model->sname = $user->sname;

				$this->is_logged_in = true;

				//get the ministry name of this logged in staff.
				$staff_ministry = $this->get_staff_ministry_name();

				//get the form number(form_no) from 'employment_record' tablee for this looged in staff
				$e_record = $this->employment_record_model->find_by_personal_record_id($this->input->post('did'));


				//create the session array variables
				$bipatas = array(
					'id' 						=> $this->input->post('did'),
					'fname'						=> $user->fname,
					'mname'						=> $user->mname,
					'sname'						=> $user->sname,
					'full_name' 				=> $this->personal_information_model->full_name(),
					'staff_ministry'			=> $staff_ministry->name,
					'staff_ministry_acronym'	=> $staff_ministry->acronyms,
					'file_no'					=> $e_record->file_no,
					'is_logged_in' 				=> true,
					);

				//set the session here.
				$this->session->set_userdata($bipatas);

				//Now Increase log count b4 redirectiong
				$increase_log = array(
					'log' 		=> $log_count->log + 1,
					'log_date'	=> date('d-m-Y  h:i A', time()),
					);
				$this->log_count_model->update($this->input->post('did'), $increase_log);

				redirect('staff');
				exit();

				}
			}else{
				//this staff has NOT YET registered.
				//let's set session and redirect to registration page

				//we first get the details of this staff and put them in session.
				$user = $this->personal_information_model->find_by_id($this->input->post('did'));
				$this->personal_information_model->fname = $user->fname;
				$this->personal_information_model->mname = $user->mname;
				$this->personal_information_model->sname = $user->sname;

				$this->is_logged_in = true;

				//get the ministry name of this logged in staff.
				$staff_ministry = $this->get_staff_ministry_name();

				//get the form number(form_no) from 'employment_record' tablee for this looged in staff
				$e_record = $this->employment_record_model->find_by_personal_record_id($this->input->post('did'));

				//create the session array variables
				$bipatas = array(
					'id' 						=> $this->input->post('did'),
					'fname'						=> $user->fname,
					'mname'						=> $user->mname,
					'sname'						=> $user->sname,
					'full_name' 				=> $this->personal_information_model->full_name(),
					'staff_ministry'			=> $staff_ministry->name,
					'staff_ministry_acronym'	=> $staff_ministry->acronyms,
					'file_no'					=> $e_record->file_no,
					'is_logged_in' 				=> true,
					);

				//set the session here.
				$this->session->set_userdata($bipatas);
				redirect('register/personal_information');
			}

		}

			}
		}



	}





	//get all ministry names so as to display them in a drop down select way
	function get_ministries() {
		$this->load->model('Ministries_model');
		return $this->Ministries_model->getAll();
	}


	//get ministry name from ministries table so as to know the ministry the logged in staff belongs to
	function get_staff_ministry_name(){
		$this->load->model('Ministries_model');
		return $this->Ministries_model->find_by_acronym($this->input->post('minname'));
	}






}