<?php
/**
 * Login View  Script
 *
 * PHP Version 5
 * @category	View	
 * @package	Common
 * @author	Lee, Cheol Won <cwlee02@simplexi.com>
 * @license	http://xxx Null
 * @link	
 *
 */
include_once (dirname(__FILE__) . '/../common/common.php');
$o_ci->template_->define('LOGIN', '/account/login.tpl');


$a_data = array (
	'FORM_OPEN' => form_open('account/login')
	, 'FORM_CLOSE' => form_close('')
	, 'SELECT_DBHOST' => ''
	, 'INPUT_DBHOST' => ''
	, 'INPUT_USERNAME' => form_input('s_login_id')
	, 'INPUT_PWD' => form_password('s_login_pw')
);

$a_data = array_merge($a_data, $a_common);

$o_ci->template_->assign($a_data);
$o_ci->template_->print_('LOGIN');

// End of file login.php
/* Location: ./views/account/login.php */
