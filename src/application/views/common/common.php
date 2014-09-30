<?php
/**
 * Common View  Script
 *
 * PHP Version 5
 * @category	View	
 * @package	Common
 * @author	Lee, Cheolwon <cwlee02@simplexi.com>
 * @license	http://xxx Null
 * @link	
 *
 */

$o_ci =& get_instance();

$csrf_token = $o_ci->security->get_csrf_token_name();
$csrf_hash = $o_ci->security->get_csrf_hash();

$a_common = array(
	'BASEURL'	=> base_url()
	, 'CSRF_INPUT' => form_hidden($csrf_token, $csrf_hash)
	, 'CSRF_TOKEN' => $csrf_token
	, 'CSRF_HASH' => $csrf_hash
);

// End of file common.php
/* Location: ./views/common/common.php */
