<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Ajax Controller Class
 *
 * @category	Controller
 * @package	Common
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	
 * @link	
 *
 */

class Ajax extends CI_Controller {
	
	private $csrf_token;
	private $csrf_hash;

	/**
	 * Ajax Constructer
	 */
	public function __construct(){
		parent::__construct();

		// Get CSRF Token/Hash
		$this->csrf_token = $this->security->get_csrf_token_name();
		$this->csrf_hash = $this->security->get_csrf_hash();
		
	}


	/**
	 * Ajax Default Function 
	 * 
	 * @return	void
	 */
	public function index(){

	}
	

	public function list_table(){

		if ($this->input->is_ajax_request()) {
			
			$s_db = $this->input->post('database');
			$this->session->set_userdata('database',$s_db);

			$this->load->model('eqb_db');
			$a_tbls = $this->eqb_db->list_tables();

			echo json_encode($a_tbls);

		}
	}

	public function list_column(){
		if ($this->input->is_ajax_request()) {

			$s_tbl = $this->input->post('table');
			$s_tbls = $this->session->userdata('table');
			if ($s_tbls) {
				$s_tbls += ','.$a_tbl;
				$this->session->set_userdata('table',$s_tbl);
			}

			$this->load->model('eqb_db');
			$a_cols = $this->eqb_db->list_column($s_tbl);

			echo json_encode($a_cols);
			
		}
	}


}

// End of file ajax.php
/* Location: ./controllers/ajax.php */
