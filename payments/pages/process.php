<?php

if(empty($_POST)){
    die;
}

require_once __DIR__ . 'db.php';

$key = 'uc18larViw9UYbsa';
$ik_id = '51237daa8f2a2d8413000000';
$dataSet = $_POST;

//сформируем подпись
unset($dataSet['ik_sign']); //удаляется значение
ksort($dataSet, SORT_STRING); 
array_push($dataSet, $key); //выбирается ключ $key
$signString = implode(':', $dataSet); //формируется строка с разделителем
$sign = base64_encode(md5($signString, true)); //кодируется

//когда пользователь отправлял номер заказа в Интеркассу, от Интеркассы этот же номер нам и приходит - $ik_pm_no
//по этому номеру мы проверяем из БД данные платежа (сумма, валюта, поменять статус заказа)
$order = R::load('orders', (int)$dataSet['ik_pm_no']);
if(!$order){
    die;
}

//проверки, которые рекомендованы Интеркассой
if($dataSet['ik_co_id'] != $ik_id || $dataSet['ik_inv_st'] != 'success' || $dataSet['ik_am'] != $order->price || $sign != $_POST['ik_sign']){
    die;
}

//если проверки прошли, меняем статус заказа объекта $order
$order->status = '1';
//сохраняем состояние объекта в БД
R::store($order);

//в качестве доп/опций можно вызывать функцию отправки письма о том, что заказ оплачен и пр.