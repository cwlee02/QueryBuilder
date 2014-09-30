<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * get_mydb
 * 
 * @param $a_hosat - array('hostname', 'username', 'password')
 * @return array:
 */
function get_mydb($a_host=NULL){
	
	$CI =& get_instance();
	$CI->load->library(array('session'));
	$CI->config->load('database');
	
	// Get DB Conn Attribute
	$a_attr = $CI->config->item('mydb');
	
	// Get User Host Information
	if (is_null($a_host)){
		$a_host = array(
			'hostname' => $CI->session->userdata('hostname'),
			'username' => $CI->session->userdata('username'),
			'password' => $CI->session->userdata('password'),
			'database' => $CI->session->userdata('database')
		);
	}
	
	$a_mydb = array_merge($a_host, $a_attr);
	
	return $a_mydb;
	
}

// function get_myhost($db=NULL){
	
// 	$a_host = array(
// 		'hostname' => $CI->session->userdata('hostname'),
// 		'username' => $CI->session->userdata('username'),
// 		'password' => $CI->session->userdata('password')
// 	);
// 	if (!is_null($db)){
// 		$a_host['database'] = $db;
// 	}
// }



?>