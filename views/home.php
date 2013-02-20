<form method="POST" action="parse.php">
	<div class="span3">
	<?php
		$count = true;
		foreach($lang as $key=>$val){
			echo '<label class="radio">';
			echo "<input type=\"radio\" name=\"compileType\" value=\"{$key}\" ";
			if($count)
				echo "checked";
			echo ">{$val}<br />";
			echo '</label>';
			$count = false;
		}
	?>
	</div>
	<div class="span9">
	<textarea name="codeIn" rows="20" class="pull-right span12"></textarea>
	</div>
	<input type="submit" value="Compile" class="btn btn-primary pull-right span4">
</form>
