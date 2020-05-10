<?php

session_start();//запускаем механизм сессии

//массив, куда мы будем помещать наши данные из формы на сайте
//без валидации
$data = [
    'name' => '',
    'email' => '',
    'product' => '',
    'price' => '',
];

//если не пуст массив POST, то наши данные пришли из формы на сайте
//ключи массива совпадают с именами полей формы
if(!empty($_POST)){
    require_once 'db.php';//подключение БД
    $data = load($data);//массив POST  с данными от поекпателя
    debug($data);
    $order_id = save('orders', $data);//сохраняет даные в тадлицу orders
    setPaymentData($order_id);//записали в сессию id и цену товара
    header('Location: pages/form.php');//редирект на страницу оплаты заказа
    die;
   
}

function setPaymentData($order_id){
    if(isset($_SESSION['payment'])) unset($_SESSION['payment']);
       $_SESSION['payment']['id'] = $order_id;
       $_SESSION['payment']['price'] = $_POST['price'];
}

//загрузка данных из нашей формы в массив data
#параметром приходит пустой массив $data
#проходимся по массиву, проверяем ключ-значение
#существует ли ключ со значением в массиве POST из массива data
#если существует, то запишем значения ключей в массив data
function load($data){
    foreach($_POST as $k => $v){
        if(array_key_exists($k, $data)){
            $data[$k] = $v;
        }
    }
    return $data;
}

//сохранить данные с помощью REdBean, создаем бин
//вызываем метод dispence
//записываем в объект $tbl данные из нашего, уже заполненного  массива
function save($table, $data){
    $tbl = R::dispense($table);
    foreach($data as $k => $v){
        $tbl->$k = $v;
    }
   return R::store($tbl);//метод сохраняет данные в $tbl, сохраняет id записи
    //поэтому возвращем его в функцию для дальнейшего использования, строка 20
    
}

//для отладки отображения
function debug($data){
    echo '<pre>';
    print_r($data);
    echo  '</pre>';
}