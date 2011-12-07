<?php

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('login_model');
    }
    
    function index() {
		if ( $this->session->userdata('logged_in') == TRUE ) {
			// Redirect user to admin area if is already logged in
			redirect("");
		}
		
		// Display login page as index page
		$this->load->view('login_view');
	}
	
	function logincheck() {
		
		// Validate username, password
		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean');
		// Set error display delimiter
		$this->form_validation->set_error_delimiters('<div class="errormsg">', '</div>');
		if($this->form_validation->run()){
			// Proceed for CRUD if validation passed
			$this->form_validation->set_rules('username','Username','callback__check_login');
			if($this->form_validation->run()){
				// Send values to login model for CRUD
				if($this->login_model->login(array('username' => $this->input->post('username'), 'password' => $this->input->post('password')))){
					$data = array(	'username' => $this->input->post('username'),
									'logged_in' => TRUE
								);
					// Add User to session
					$this->session->set_userdata($data);
					redirect('entry');
				}
			}
		}
		$this->load->view('login_view');
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

}
