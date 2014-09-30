<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Eqb Model Class
 *
 * @category	Model
 * @package	Common	
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	http://xxx Null
 * @link	
 *
 */
class Eqb_db extends CI_Model {

	private $mydb;
	private $db;

	/**
	 * Common model Constructer 
	 */
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('hostname') && $this->session->userdata('username')){
			$this->mydb = $this->load->database(get_mydb(), TRUE);
		}	
	}

	public function list_databases(){

		$s_qry = "SHOW DATABASES";
		$o_qry = $this->mydb->query($s_qry);
		$dbs = array();
		if ($o_qry->num_rows() > 0) {
			foreach ($o_qry->result_array() as $row) {
				$dbs[] = current($row);
			}
		}

		return $dbs;
	}

	public function list_tables(){
		$s_qry = "SHOW TABLES";
		$o_qry = $this->mydb->query($s_qry);
		$tbs = array();
		if ($o_qry->num_rows() > 0) {
			foreach ($o_qry->result_array() as $row) {
				$tbs[] = current($row);
			}
		}
		return $tbs;
	}

	public function list_column($s_tbl){
		$s_qry = "SHOW COLUMNS FROM $s_tbl";
		$o_qry = $this->mydb->query($s_qry);

		$cols = array();
		if ($o_qry->num_rows() > 0) {
			foreach ($o_qry->result_array() as $row) {
				$cols[] = current($row);
			}
		}

		return $cols;
	}

}

// End of file eqb_db.php
/* Location: ./models/eqb_db.php */
