<?php

require_once __DIR__ . '/../config/config.php';

if (isset($_GET['operation'])) {
	$operation = $_GET['operation'];
	$oper1 = $_GET['oper1']?$_GET['oper1']:0;
	$oper2 = $_GET['oper2']?$_GET['oper2']:0;
	$calcResult = [
		'result' => calc($oper1, $oper2, $operation),
		'oper1' => $oper1,
		'oper2' => $oper2,
		'operation' => $operation
	];

} else {
	$calcResult = [
		'result' => 'Введите данные',
		'oper1' => '',
		'oper2' => '',
		'operation' => ''
	];
}

$calc = render(TEMPLATES_DIR .'calc.tpl', $calcResult);

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Магазин',
	'h1' => 'Калькулятор',
	'content' => $calc
]);

