<?php


Class PreController extends CI_Controller{
	
	

	public function __construct(){
		$this->CI =& get_instance();
		
	}

	public function prepareRequestHandle(){

		if ($this->_needLogin() === TRUE) {
			//세션만료
			redirect('/');
		}
	}

	private function _needLogin(){
		if ($this->CI->session->userdata('hostname') && $this->CI->session->userdata('username')) {
			return FALSE;
		}

		/**
		 * URL Filtering
		 */
		if (
			uri_string() === '' 
			OR uri_string() === 'certified/login'
		) {
			return FALSE;
		}
		return TRUE;
	}
}