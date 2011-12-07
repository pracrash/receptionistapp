<?php

class Entry extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ( $this->session->userdata('logged_in') != TRUE ) {
			redirect( "login_controller" );
		}
    }

	function index() {
		//echo anchor('login/logout','Logout');
		$data['page'] = 'entryform';
		$this->load->view('body', $data);
	}
}
