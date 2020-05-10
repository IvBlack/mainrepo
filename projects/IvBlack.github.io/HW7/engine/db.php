<?php

function createConnection()
{
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	mysqli_query($db, "SET CHARACTER SET 'utf8'");
	return $db;
}

function execQuery($sql)
{
	$db = createConnection();

	$result = mysqli_query($db, $sql);

	mysqli_close($db);
	return $result;
}

function getAssocResult($sql)
{
	$db = createConnection();

	$result = mysqli_query($db, $sql);

	$array_result = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$array_result[] = $row;
	}

	mysqli_close($db);
	return $array_result;
}

function show($sql)
{
	$result = getAssocResult($sql);
	if(empty($result)) {
		return null;
	}
	return $result[0];
}


function logIn($name, $pass) {

    $name = interClear ($name);
    $pass = interClear ($pass);

    $sqlPass = md5($pass);

    $sql = "SELECT * FROM `Users` WHERE `login` = '$name' AND `pass` = '$sqlPass'";
     
    $name = getAssocResult($sql);
    
    return $name;
}

function registration($login, $pass, $name, $role = 0) {

    $login = interClear ($login);
    $pass = md5(interClear($pass));
    $name = interClear ($name);

    //проверяем пользователя 
    $check = logIn($login, $pass);
   

    if ($check != NULL) {
        $answer = "Пользователь с таким  именем уже зарегистрирован";
        return $answer;
    }

    $sql = "INSERT INTO `Users` (`id`, `login`, `pass`, `Name`, `role`) VALUES (NULL, '$login', '$pass', '$name', '$role')";
    
	execQuery($sql);

    $answer = "Вы зарегистрированы";
    return $answer;
}

