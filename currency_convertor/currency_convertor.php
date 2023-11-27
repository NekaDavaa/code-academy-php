<?php
require 'class.php';
$curr_obj = new Currency;
$calc_obj = new Calculator;
?>
<form class="calculator" method="POST">
<label>От Валута
	<select name="from_currency">
		<option value="bgn">BGN (Български лев)</option>
		<option value="eur">EUR (Евро)</option>
		<option value="aud">AUD (Австралийски долар)</option>
	</select>
</label>
<label>Към Валута
	<select name="to_currency">
		<option value="bgn">BGN (Български лев)</option>
		<option value="eur">EUR (Евро)</option>
		<option value="aud">AUD (Австралийски долар)</option>
	</select>
</label>
<label>Сума 
<input type="number" name="amount_to_convert" />
<input type="submit" name="submit" />
</form>
<div>
	<p>Резултат: <?php 
	echo $calc_obj->convertSum(); ?></p>
</div>

<style>
	.calculator {
		display:flex;
		flex-direction: column;
		gap:20px;
		border:1px solid black;
		padding: 15px;
	}
</style>
