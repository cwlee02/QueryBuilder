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

	private $a_dbs;
	
	/**
	 * Eqb Constructer
	 */
	public function __construct(){
		parent::__construct();
		//	Get DB List
		$this->load->model('eqb_db');
		$this->a_dbs = $this->eqb_db->list_databases();
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

		$a_data = array(
			'a_dbs' => $this->a_dbs,
			'page' => 'select'
		);
		$this->load->view('eqb', $a_data);
	}

	public function insert(){
		$a_data = array(
			'a_dbs' => $this->a_dbs,
			'page' => 'insert'
		);
		$this->load->view('eqb', $a_data);
	}

	public function replace(){
		$a_data = array(
			'a_dbs' => $this->a_dbs,
			'page' => 'replace'
		);
		$this->load->view('eqb', $a_data);
	}

	public function update(){
		$a_data = array(
			'a_dbs' => $this->a_dbs,
			'page' => 'update'
		);
		$this->load->view('eqb', $a_data);
	}



}

// End of file eqb.php
/* Location: ./controllers/eqb.php */
