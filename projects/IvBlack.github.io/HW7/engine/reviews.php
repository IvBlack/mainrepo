<?php


function showReviews($allItems)
{ 

	$reviewContent = '';
	foreach ($allItems as $reviewItem) {
		
		//Делаю выборку нужных значений для шаблона и склеиваю все в одну строку

		$reviewContent .= render(TEMPLATES_DIR . 'reviewItem.tpl', [
				'id' => $reviewItem['id'],
				'title' => $reviewItem['name'],
				'text' => $reviewItem['review']
			]);
	}

	return $reviewContent;
}


function reviewAdd($autor, $text){

   $sql = "INSERT INTO `reviews` (`id`, `name`, `review`) VALUES (NULL, '$autor', '$text')";

    $result = execQuery($sql);
    return $result;

}

function reviewDelete($id){

	$id = (int)$id;

   	$sql = "DELETE FROM`reviews` WHERE `reviews`.`id` = $id" ;
   
    $result = execQuery($sql);
    return $result;
}

function reviewUpdate($autor, $text, $id){

   $sql = "UPDATE `reviews` SET `name` = '$autor', `review` = '$text' WHERE `reviews`.`id` = $id";

    $result = execQuery($sql);
    return $result;
}
