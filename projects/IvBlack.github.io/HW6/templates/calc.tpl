
<p><form action="calc.php">
	<br>
	<input type="number" name="oper1" value="{{OPER1}}"> 
	<br>
	<input type="number" name="oper2" value="{{OPER2}}">
	<br>
	<input type="submit" name="operation" value="+">
	<input type="submit" name="operation" value="-">
	<input type="submit" name="operation" value="/">
	<input type="submit" name="operation" value="*">
</form>
</p>
<p><form action="calc.php" id="math"> 
	<br>
	<input type="number" name="oper1" value="{{OPER1}}"> 
	<br>
	<input type="number" name="oper2" value="{{OPER2}}">
	<br>
	<select name="operation">
		<option value = "+">+</option>
		<option value = "-">-</option>
		<option value = "*">*</option>
		<option value = "/">/</option>
	</select>
	<input type="submit" value="Рассчитать"> 
</form>
</p>
<p>
	Результат вычислений: <br>
{{OPER1}} {{OPERATION}} {{OPER2}} = {{RESULT}}

</p>