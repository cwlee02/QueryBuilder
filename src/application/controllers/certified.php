<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Certified Controller Class
 *
 * @category	Controller
 * @package	API
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	
 * @link	
 *
 */
class Certified extends CI_Controller {


	/**
	 * Certified Constructer
	 */
	public function __construct(){
		parent::__construct();
		// $this->load->model('certified_db');
	}

	/**
	 * Certified Default Function 
	 * 
	 * @return	void
	 */
	public function index(){
		
		$this->load->view('certified');
	}

	/**
	 * Login Page for this controller.
	 *
	 * @return	void
	 */
	public function login(){
		$a_host = array(
			'hostname' => $this->input->post('s_host'),
			'username' => $this->input->post('s_usernmae'),
			'password' => $this->input->post('s_password'),
		);
		
		if ( $a_host['hostname'] && $a_host['username'] ) {
			$this->_login($a_host);
		}
		
	}

	/**
	 * _login
	 * @param  array $a_host ('hostname', 'username', 'password')
	 * @return void
	 */
	private function _login($a_host){

		// Set DB Property
		$a_mydb = get_mydb($a_host);

		// Host Connect
		$this->load->model('certified_db');
		$connected = $this->certified_db->host_connect($a_mydb);

		if ($connected) {
			$this->session->set_userdata($a_host);
			redirect('/eqb/select');
		} else {
			echo __FUNCTION__.' FAILED. Check your host info';
		}

	}

	public function logout(){
		$a_user_cfg = array(
			'hostname' => '',
			'username' => '',
			'password' => ''
		);
		$this->session->sess_destroy();
		redirect('/');
	}

}

// End of file certified.php
/* Location: ./controllers/certified.php */
