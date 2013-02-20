<?include('header.php');?>
<?
$lang = array("C"=>'C', 
			"CPP" => "C++", 
			"Java" => "Java");
?>
<form method="POST" action="parse.php">
	<?php
		foreach($lang as $key=>$val){
			echo "<input type=\"radio\" name=\"compileType\" value=\"{$key}\">{$val}";
		}
	?><br />
	<textarea name="codeIn" rows="4" cols="50"></textarea><br />
	<input type="submit" value="Submit">
</form>
<?include('footer.php');?>
