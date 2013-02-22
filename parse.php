<? include('include.php');
	
if($PASS) {
	if(isset($_POST['compileType']) && isset($_POST['codeIn'])){
		$compileType = get_code($_POST['compileType']);
		$codeIn = $_POST['codeIn'];
		do {
			$outDir = uid($FILE_LEN);
		} while(file_exists(basePath() . "/data/" . $outDir));
			mkdir("./data/" . $outDir . "/");
		$fout = fopen("./data/" . $outDir . "/" . $outDir . ".prog", 'w');
		fwrite($fout, $codeIn);
		fclose($fout);
		$var = shell_exec("./compile.sh $outDir $compileType");
		//TODO compiling shit
		//		generate .out file
		if($var == 0) {
		    header('Location: index.php/' . $outDir);
		} else{
			echo $var;
		}
	}else{
		header('Location: index.php');
	}
} else {
	get_page("site_down");
}
?>
