<?php

function showShop($allItems)
{ 

  $shopContent = '';
  foreach ($allItems as $shopItem) {
    if (empty($shopItem['image'])) {
      $shopItem['image'] = 'img/no-image.jpeg';
    }
      //Делаю выборку нужных значений для шаблона и склеиваю все в одну строку

    $shopContent .= render(TEMPLATES_DIR . 'shopItem.tpl', [
        'id' => $shopItem['id'],
        'src' => $shopItem['image'],
        'title' => $shopItem['title'],
        'text' => $shopItem['description'],
        'price' => $shopItem['price']
      ]);
  }

  return $shopContent;
}

function itemAdd($title, $text, $image, $price){

   $sql = "INSERT INTO `goods` (`id`, `title`, `description`, `image`, `price`) VALUES (NULL, '$title', '$text', '$image', '$price')";

    $result = execQuery($sql);
    return $result;

}

function itemDelete($id){

	$id = (int)$id;

   	$sql = "DELETE FROM`goods` WHERE `id` = $id" ;

    $result = execQuery($sql);
    return $result;
}

function itemUpdate($title, $text, $price, $id, $image = 'img/3.jpg'){

	$id = (int)$id;

   $sql = "UPDATE `goods` SET `title` = '$title', `description` = '$text', `image` = '$image', `price` = '$price' WHERE `id` = $id";
  
    $result = execQuery($sql);
    return $result;
}
//user здесь и далее - указывает конкретного пользователя, что бы не получить все заказы всех пользователей. 
function showCart($user = 'admin') {

  $content ='';

  $sql = "SELECT * FROM `tempOrder` WHERE `username` = '$user'" ;

  $orderInfo = getAssocResult($sql);

  foreach ($orderInfo as $orderItem) {

  $itogo = $orderItem['goodCount'] * $orderItem['goodPrice'];

    $orderInfo = [
        'image' => $orderItem['image'],
        'title' => $orderItem['goodName'],
        'count' => $orderItem['goodCount'],
        'price' => $orderItem['goodPrice'],
        'itog' => (string)$itogo,
        'id' => $orderItem['goodId']
    ];

    $content .= render (TEMPLATES_DIR . 'cart.tpl', $orderInfo);
    
    }

  return $content;
}

function updateCart($user = 'admin') {

    $new[] = interClear($_GET['id']);
    $new[] = interClear($_GET['count']);

    $result = '';
    //Админа надо заменить на пользователя, тогда не будет изменения товаров всех пользователей во временной корзине
    $sql = "UPDATE `tempOrder` SET `goodCount` = '$new[1]' WHERE `tempOrder`.`goodId` = $new[0] AND `tempOrder`.`username` = '$user'";

    execQuery($sql);
}

function deleteCart($user = 'admin') {

    $id = interClear($_GET['id']);
       
    $sql = "DELETE FROM `tempOrder` WHERE `tempOrder`.`goodId` = $id AND `tempOrder`.`username` = 'user'";
    execQuery($sql);
}

function addToCart() {

    $id = interClear($_GET['id']);
    $incart = checkInCart($id);
    
    $username = 'admin'; //менять при авторизации
    $count = interClear($_POST['count']);
    $title = interClear($_POST['title']);
    $price = interClear($_POST['price']);
    $image = interClear($_POST['img']);

    if (!is_array($incart)) {
    
      $sql = "INSERT INTO `tempOrder` (`username`, `goodId`, `goodCount`, `goodName`, `goodPrice`, `id`, `image`) VALUES ('$username', '$id', '$count', '$title', '$price', NULL, '$image')";
    }
    else {
      $newCount = $incart[0]['goodCount'] + $count;
      $sql = "UPDATE `tempOrder` SET `goodCount` = '$newCount' WHERE `tempOrder`.`goodId` = $id";
    }
execQuery($sql);
}

function checkInCart($id, $user = 'admin') {

   $sql = "SELECT * FROM `tempOrder` WHERE `goodId` = $id AND `tempOrder`.`username` = '$user'";
   $result = getAssocResult($sql);

   if (empty($result)) {
     return "ok";
   } else return $result;
}