<?php

require_once __DIR__ . '/../config/config.php';
//меняю базу
$sql = "SELECT * FROM reviews";
$action = "Добавить";
$autor ='';
$text = '';
$id = '';
$notice = '';

//Логика через ветвление, если мы обрабатываем какую то форму которая влияет на то что будет отображаться на странице то ее нужно вставлять раньше чем начинаем строить данные для вывода 


//проверка переданого флага 
if (isset($_GET['flag'])) {

	$id = $_GET['id'];
	
	if ($_GET['flag'] == 'delete') {
		reviewDelete($id);
		//этот кусок рендерим вместе с формой флаг показать пользователю что что то все таки произошло на странице
		$notice ='запись удалена';
	}

	//весь этот кусок нужен только затем что бы вывести в форме данные 
	if ($_GET['flag'] == 'update') {
		$action = "Изменить";
		$search = "SELECT * FROM `reviews` WHERE `id` = $id"; 
		$updateReview = show($search);
		$autor = $updateReview['name'];
		$text = $updateReview['review'];
		$notice = 'Внесите изменения';
	} 

}

//проверка что передали оба поля
if (isset($_POST['autor']) AND isset($_POST['text'])) {
			//проверка что они не пустые
			if ($_POST['autor'] != '' AND $_POST['text'] != '') {
				//удаляем лишнее из ввода пользователя 
				$autor = interClear($_POST['autor']);
				$text = interClear($_POST['text']);

				//проверяем, а что собственно просила нас сделать форма 
				if ($_POST['action'] == 'Добавить') {

					$result = reviewAdd($autor, $text); 
					$notice = 'Запись добавлена';
				}
				if ($_POST['action'] == 'Изменить') {
					$id = $_POST['id'];
					$result = reviewUpdate($autor, $text, $id); 

					//обнуляем значения по умолчанию что бы очистить форму
					$autor ='';
					$text = '';
					$notice = "Запись $id изменена";
				}
			}
}

//меняю имена переменных на подходящие
$reviewItems = getAssocResult($sql);
//test($reviewItems);

//добавляем форму для ввода ее рендерим отдельно так как наша текущая форма используется в foreach и если вставлять туда этих форму их будет штук дцать

$review = render(TEMPLATES_DIR . 'reviewForm.tpl', [
	'action' => $action,
	'autor' => $autor,
	'text' => $text,
	'id' => $id,
	'notice' => $notice
	]);

//используяя данные массива строим галерею. Так как review уже у нас содержит какую то строку, то используем склейку .=
$review .= showReviews($reviewItems);

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Магазин',
	'h1' => 'Отзывы о нашей работе',
	'content' => $review
]);