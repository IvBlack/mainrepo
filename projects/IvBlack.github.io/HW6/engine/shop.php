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
