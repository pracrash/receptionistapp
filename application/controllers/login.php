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
	
	

}
