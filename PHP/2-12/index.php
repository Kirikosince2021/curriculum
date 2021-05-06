<form action="result.php" method="post">
    
	お名前：<input type="text" name="name"><br>
	ご希望商品：
	<input type="radio" name="selection" value="A">A賞
	<input type="radio" name="selection" value="B">B賞
	<input type="radio" name="selection" value="C">C賞<br>
	個数：
	<select name="sum">
		<?php for($i = 1; $i <= 10; $i++) {?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?>
		<?php } ?>
	</select>
	<br>
    <input type="submit" value="申込" />
</form>
