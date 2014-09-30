<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Eqb Controller Class
 *
 * @category	Controller
 * @package	Common
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	
 * @link	
 *
 */
class Eqb extends CI_Controller {
	
	private $csrf_token;
	private $csrf_hash;

	/**
	 * Eqb Constructer
	 */
	public function __construct(){
		parent::__construct();

		// Get Common KEY/VALUE
		$this->csrf_token = $this->security->get_csrf_token_name();
		$this->csrf_hash = $this->security->get_csrf_hash();
		
	}


	/**
	 * Eqb Default Function 
	 * 
	 * @return	void
	 */
	public function index(){
		$this->select();
	}
	
	public function select(){

		//	Get DB List
		$this->load->model('eqb_db');
		$a_dbs = $this->eqb_db->list_databases();

		// Make Select Box - DB List
		$opt_select[0] = 'Select Database';
		foreach ($a_dbs as $db) {
			$opt_select[$db] = $db;
		}
		$a_dbs = form_dropdown('dbs',$opt_select, '0');	

		// Make View Parameter
		$a_data = array(
			'DBS' => $a_dbs,
			'CSRF' => form_hidden($this->csrf_token, $this->csrf_hash),
		);

		$this->load->view('eqb/eqb', $a_data);
	}

	public function insert(){

	}

	public function replace(){

	}

	public function update(){

	}



}

// End of file eqb.php
/* Location: ./controllers/eqb.php */
