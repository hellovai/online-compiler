<form method="POST" action="parse.php">
	<textarea name="codeIn" rows="4" cols="50"></textarea><br />
	<?php
		foreach($lang as $key=>$val){
			echo "<input type=\"radio\" name=\"compileType\" value=\"{$key}\">{$val}";
		}
	?><br />
	<input type="submit" value="Submit">
</form>
