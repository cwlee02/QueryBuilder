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
include_once (dirname(__FILE__) . '/common/common.php');
$o_ci->template_->define('LOGIN', '/tpl/certified.tpl');



$a_data = array (
	'FORM_OPEN' => form_open('certified/login')
	, 'FORM_CLOSE' => form_close('')
);

$a_data = array_merge($a_data, $a_common);

$o_ci->template_->assign($a_data);
$o_ci->template_->print_('LOGIN');

// End of file login.php
/* Location: ./views/account/login.php */
