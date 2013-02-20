<?include('header.php');?>
<?php
	if(isset($_POST['compileType']) && isset($_POST['codeIn'])){
		$compileType = $_POST['compileType'];
		$codeIn = $_POST['codeIn'];
	}else{
		header('error.html');
	}
	echo '<p>Input:</p>';
	echo '<textarea rows="4" cols="50" readonly>' . $codeIn . '</textarea>';
	echo '<p>Output:</p>';
	echo '<textarea rows="4" cols="50"></textarea><br />';
?>
<?include('footer.php');?>
