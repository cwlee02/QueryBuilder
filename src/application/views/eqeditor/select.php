<?php


include_once (dirname(__FILE__) . '/../common/common.php');
$o_ci->template_->define('SELECT', 'eqeditor/select.tpl');

$a_data = array ();

$a_data = array_merge($a_data, $a_common);
$o_ci->template_->assign($a_data);

$o_ci->template_->print_('SELECT');

// End of file login.php
/* Location: ./views/account/login.php */
