<?php  session_start; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>

<p>Через несколько секунд Вы будете перенаправлены на страницу оплаты. Нажмите на кнопку, если не хотите ждать...</p>

<!-- Форма с тестовыми значениями, подключение Интеркассы не производилось-->
<?php if(!empty($_SESSION[payments])) : ?>
<form name="payment" method="post" action="https://sci.interkassa.com/" accept-charset="UTF-8">
  <input type="hidden" name="ik_co_id" value="51237daa8f2a2d8413000000"/>
  <input type="hidden" name="ik_pm_no" value="ID_4233"/>
  <input type="hidden" name="ik_am" value="1.44"/>
  <input type="hidden" name="ik_cur" value="uah"/>
  <input type="hidden" name="ik_desc" value="Payment Description"/>
  <input type="submit" value="Pay">
</form>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!-- Задержка 5 сек перед отправкой на страницу оплаты-->
<scrip>
    setTimeOut(function(){
    $('form).submit;
    }, 5000);
</scrip>
</body>
</html>