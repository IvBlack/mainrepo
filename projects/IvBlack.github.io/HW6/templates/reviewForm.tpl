<p>{{NOTICE}}</p>
<form action="reviews.php" method="post">
	Имя <br><input type="text" name="autor" placeholder="Имя" value="{{AUTOR}}"> <br>
	Отзыв <br><textarea name="text" cols="30" rows="10">{{TEXT}}
	</textarea> <br>
	<input type="hidden" name="id" value="{{ID}}">
	<input type="submit" name="action" value="{{ACTION}}">
</form>