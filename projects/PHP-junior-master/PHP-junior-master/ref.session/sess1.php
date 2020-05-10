<?php
session_start();
define('ADMIN', 'admin');

if (!empty($_POST['login'])){
    if ($_POST['login'] === ADMIN){
        $_SESSION['admin'] = ADMIN;
        $_SESSION['res'] = 'Вы успешно вошли!';
    }
    else{
        $_SESSION['res'] = 'Неверный логин!';
    }
    header("Location: sess1.php");
    die;
}
?>

<ul>
    <li><a href="sess1.php">sess1</a></li>
    <li><a href="sess2.php">sess2</a></li>
    <li><a href="secret.php">secret</a></li>
</ul>

<hr>

<?php
    if (isset($_SESSION['res'])){
        echo $_SESSION['res'];
        unset ($_SESSION['res']);
    }

/*echo '<pre>';
var_dump($_SESSION);
var_dump($_REQUEST);
echo '</pre>';*/
    ?>


<form action="" method="post">
    <input type="text" name="login">
    <button type="submit">Login</button>
</form>