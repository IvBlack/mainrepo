<?php

spl_autoload_register(function ($class) {
	include 'c/' . $class . '.php';
});


$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

if (isset($_GET['c'])) {
	if ($_GET['c'] == 'page') {
		$controller = new C_Page();
	} else if ($_GET['c'] == 'user') {
		$controller = new C_User();
	} else if ($_GET['c'] == 'good') {
		$controller = new C_Good();
	} else if ($_GET['c'] == 'basket') {
		$controller = new C_Basket();
	} else if ($_GET['c'] == 'order') {
		$controller = new C_Order();
	}
} else {
	$controller = new C_Page();
}

$controller->Request($action);