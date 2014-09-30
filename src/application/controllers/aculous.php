<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Aculous Controller Class
 *
 * @category	Controller
 * @package	Common
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	
 * @link	
 *
 */

class Aculous extends CI_Controller {
	
	// private $csrf_token;
	// private $csrf_hash;

	/**
	 * Aculous Constructer
	 */
	public function __construct(){
		parent::__construct();

		// Get CSRF Token/Hash
		// $this->csrf_token = $this->security->get_csrf_token_name();
		// $this->csrf_hash = $this->security->get_csrf_hash();
		
	}


	/**
	 * Aculous Default Function 
	 * 
	 * @return	void
	 */
	public function index(){

		// $this->load->view('svg/jsplumb');
		// $this->load->view('aculous/jsplumb');
		$this->load->view('aculous/draggable');
		// $this->load->view('aculous/sortable');

	}
	


}

// End of file aculous.php
/* Location: ./controllers/aculous.php */
