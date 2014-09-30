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
// $o_ci->template_->define('EQB', '/eqb/eqb.tpl');

$o_ci->template_->define(array(
	'db1'=>'/eqb/eqb.tpl?db1',
	'db2'=>'/eqb/eqb.tpl?db2',
	'db3'=>'/eqb/eqb.tpl?db3',
));

$a_data = array (
);

$a_data = array_merge($a_data, $a_common);

$o_ci->template_->assign($a_data);


$o_ci->template_->print_('db1');
flush();
$o_ci->template_->print_('db2');
flush();
$o_ci->template_->print_('db3');

// End of file login.php
/* Location: ./views/account/login.php */
