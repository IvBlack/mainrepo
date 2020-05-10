<?php

//функция для vardump что бы везде не писать конструкцию ниже обернул ее в функцию
function test ($variable) {
	echo "<pre>";
	var_dump($variable);
	echo "</pre>";
	die;
}

function render($file, $variables = [])
{
	if (!is_file($file)) {
		echo 'Template file "' . $file . '" not found';
		exit();
	}

	if (filesize($file) === 0) {
		echo 'Template file "' . $file . '" is empty';
		exit();
	}


	$templateContent = file_get_contents($file);

	foreach ($variables as $key => $value) {
		if (!is_string($value)) {
			continue;
		}

		$key = '{{' . strtoupper($key) . '}}';
		$templateContent = str_replace($key, $value, $templateContent);
		if ($key == 'result') {
			test($value);
		}
	}

	return $templateContent;
}

function calc($oper1, $oper2, $operation) {

	switch ($operation) {
		case '+':
			$result = $oper1 + $oper2;
			break;
		case '-':
			$result = $oper1 - $oper2;
			break;
		case '/':
			if ($oper2 == 0) {
				$result = "Деление на 0!";
			} else {
				$result = $oper1 / $oper2;
			} 
			break;
		case '*':
			$result = $oper1 * $oper2;
			break;
		default:
			$result = "Не выбрана операция";
			break;
	}
	//преобразую к строке а то рендер ругается
	return (string)$result;
}

//проверка ввода
function interClear($formData) {

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($link, "utf8");

    //обработка если аргумент строка
    if  (is_string($formData)) {
        $formData = trim($formData);
        $formData = strip_tags($formData);
        $formData = htmlspecialchars($formData);
        $formData = mysqli_real_escape_string($link, $formData);
        return $formData;
    }

}

function getImage() {

    $uploads_dir = "img";
    $tmp_name = $_FILES['image']['tmp_name'];
    $name = basename($_FILES['image']['name']);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
    
    return $uploads_dir ."/".$name;

}