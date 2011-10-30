<?php
	class Login_model extends CI_Model {
		// table name
		private $tbl_name = 'users';

		function getuser($options = array()) {
			if(isset($options['username']))
				$this->db->where('username',$options['username']);
			if(isset($options['password']))
				$this->db->where('password',$options['password']);

			$query = $this->db->get($this->tab);
			return $query->result();
		}

		function login($options = array()){
			if(!$this->_required(array('username','password'),$options))
				return false;

			$user = $this->getuser(array('username' => $options['username'],'password'=>md5($options['password'])));
			if(!$user)
				return false;

			return true;
		}

		function _required($required, $data){
			foreach($required as $field){
				if(!isset($data[$field]))
					return false;

				return true;
			}
		}
	}
?>
