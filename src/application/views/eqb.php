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
$o_ci->template_->define('HEADER', '/tpl/_header.tpl');
$o_ci->template_->define('MODULE', '/tpl/'.$page.'.tpl');
$o_ci->template_->define('FOOTER', '/tpl/_footer.tpl');

// database list
// var_dump($a_dbs);

$a_data = array (
	'FORM_OPEN' => form_open('account/login')
	, 'FORM_CLOSE' => form_close('')
	, 'DBS' => $a_dbs
	, 'PAGE' => $page
);

$a_data = array_merge($a_data, $a_common);

$o_ci->template_->assign($a_data);
$o_ci->template_->print_('HEADER');
$o_ci->template_->print_('MODULE');
$o_ci->template_->print_('FOOTER');

// End of file login.php
/* Location: ./views/account/login.php */
