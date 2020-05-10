<div style="float: left; border: 1px solid black; margin-left: 20px; text-align: center;">
	<form action="#">
		<img src="{{IMAGE}}" alt="" style="max-width: 200px;"> <input type="hidden" name="id" value="{{ID}}">
	<input type="hidden" name="img" value="{{IMAGE}}">	<hr>
	<br>{{TITLE}} <input type="hidden" name="title" value="{{TITLE}}"><hr>
	<br><input type="number" name="count" value="{{COUNT}}" min='1'><hr>
	<br>{{PRICE}} <input type="hidden" name="price" value="{{PRICE}}"><hr>
	<br>{{ITOG}} <hr>
	<br><input type="submit" name="update" value="Изменить"><hr>
	<br><input type="submit" name="delete" value="Удалить">
	</form>
</div>
