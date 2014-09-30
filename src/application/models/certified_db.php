<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Certified Model Class
 *
 * @category	Model
 * @package	Common	
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	http://xxx Null
 * @link	
 *
 */
class Certified_db extends CI_Model {

	private $mydb;

	/**
	 * Certified model Constructer 
	 */
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('hostname') && $this->session->userdata('username')){
			$this->mydb = $this->load->database(get_mydb(), TRUE);
		}

	}

	/**
	 * set_host
	 * @param Array $cfg Host Config Info - hostname, username, password
	 * return Boolean
	 */
	public function host_connect($cfg){

		$this->mydb = $this->load->database($cfg, TRUE);

		// Access Verification
		if ($this->mydb->conn_id) {
			// User Localhost Permission Verification
			if ($this->mydb->hostname === '127.0.0.1' OR $this->mydb->hostname === 'localhost') {
				$s_hostname = $this->mydb->hostname;
				$s_username = $this->mydb->username;
				$s_qry = "SHOW GRANTS FOR '$s_username'@localhost";
				$result = $this->mydb->query($s_qry);
				if (!$result) {
					return FALSE;
				}
			}
			return TRUE;
		}else{
			return FALSE;
		}

	}

}

// End of file certified_db.php
/* Location: ./models/certified_db.php */
