<?php
#функции для работы с массивами

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Description'
    ],
    
    [
        'title' => 'iPad', 
        'price' => 200,
        'description' => 'Description'
    ]
    
];

/*вручную никто не работает сегодня
echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];*/

//создадим цикл
$i = 0;
while($i < 3){
    echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'];
    echo '<br>';
    $i++;
}

//однако вручную поправлять счетчик в программе - несовременно
#используем функции для работы с массивами

//count - подсчитывает кол-во элементов в массиве
//принимает 2 параметра, один - опциональный для многомерных массивов
echo count($goods, 1);
echo '<br>';
echo '_____________________________________________________________________________';

//array_diff - находит расхождение n массивов
/*$array1 = array("a" => 'red', 'green', 'red', 'blue', 2);
$array2 = array("b" => 'green', 'yellow', 'red');
$result = array_diff($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';*/
echo '_____________________________________________________________________________';

$array1 = array("a" => 'red', 'green', 'red', 'blue', 2);
$array2 = array("b" => 'green', 'yellow', 'red');
$result = array_intersect($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '_____________________________________________________________________________';

//array_key_exists - присутствие ключа в массиве
$search_array = array('first'=>1, 'second'=>4);
if(array_key_exists('first', $search_array)){
    echo "Массив содержт элемент 'first'.";
}
echo '_____________________________________________________________________________';

//array_keys - возвращает ключи
$result = array_keys($goods[0]);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '_____________________________________________________________________________';

//array_values - возвращает значения ключей массива
$result = array_values($goods[1]);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '_____________________________________________________________________________';

//array_merge - слияние массивов, есть особенности
$array1 = array("color"=> "red", 2, 4);
$array2 = array("a", "b", "color"=>"green", "shape"=>"trapezoid", 4);
$result = array_merge($array1, $array2);

echo '<pre>';
print_r($result);
echo '</pre>';

$result = $array1 + $array2;

echo '<pre>';
print_r($result);
echo '</pre>';
echo '_____________________________________________________________________________';

//array_rand - выбирает одно или несколько случайных значений массива
$result1 = array_rand($array2, 2);

echo '<pre>';
print_r($result1);
echo '</pre>';
echo '_____________________________________________________________________________';

//array_reverse - возвращает массив в обратном порядке /с перезаписью ключей и без/
$result1 = array_reverse($array2, true);

echo '<pre>';
print_r($result1);
echo '</pre>';
echo '_____________________________________________________________________________';

//compact - создает массив с переменными
$city = "Colambus";
$state = "Oregon";
$event = "baaaam";

$result3 = compact('city', 'state', 'event');

echo '<pre>';
print_r($result3);
echo '</pre>';
echo '_____________________________________________________________________________<br>';

//extract - создает переменные из элементов массива /только для ассоциативных массивов/
$a =
    [
        'city' => 'Colambus',
        'state' => 'Oregon',
        'event' => 'baaaam'
    ];

extract($a);
echo $state;
echo '<br>';
echo '_____________________________________________________________________________<br>';

//arsort — Сортирует массив в обратном порядке, сохраняя ключи
$towns = array("d" => "Connectikut", "a" => "Dallas", "b" => "Alabama", "c" => "Waterford");
arsort($towns);
foreach ($towns as $key => $val) {
    echo "$key = $val<br>";
}
echo '_____________________________________________________________________________<br>';

//asort — Сортирует массив, сохраняя ключи
$towns = array("d" => "Connectikut", "a" => "Dallas", "b" => "Alabama", "c" => "Waterford");
asort($towns);
foreach ($towns as $key => $val) {
    echo "$key = $val<br>";
}
echo '_____________________________________________________________________________<br>';

//rsort — Сортирует массив в обратном порядке
$towns = array("d" => "Connectikut", "a" => "Dallas", "b" => "Alabama", "c" => "Waterford");
rsort($towns);
foreach ($towns as $key => $val) {
    echo "$key = $val<br>";
}
echo '_____________________________________________________________________________<br>';

//sort — Сортирует массив
$towns = array("d" => "Connectikut", "a" => "Dallas", "b" => "Alabama", "c" => "Waterford");
sort($towns);
foreach ($towns as $key => $val) {
    echo "$key = $val<br>";
}
echo '_____________________________________________________________________________<br>';

//array_shift — Извлекает первый элемент массива
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
echo '<br>';
echo '_____________________________________________________________________________<br>';

//array_unshift — Добавляет один или несколько элементов в начало массива
$queue = array("orange", "banana");
array_unshift($queue, "cherry", "apple");
print_r($queue);
echo '<br>';
echo '_____________________________________________________________________________<br>';

//array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

echo '<pre>';
print_r($c);
echo '</pre>';


/*
array_combine
array_search
array_shift
array_unique
array_unshift
array_flip
array_pop
array_push
in_array
 */