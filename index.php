<? include('include.php');

if($PASS) {
	$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
	if( sizeof($segments) > 3 ) {
		$outDir = $segments[3];
		if(file_exists(basePath() . "/data/" . $outDir)){
			$fileName = basePath() . "/data/" . $outDir . "/" . $outDir;
			if(filesize($fileName . ".prog") > 0) {
				$fin = fopen($fileName . ".prog", 'r');
				$orig = fread($fin, filesize($fileName . ".prog"));
				fclose($fin);
			} else {
				$orig = "";
			}
			
			if(filesize($fileName . ".comp") > 0){
				$readFILE = $fileName . ".comp";
			}else{
				$readFILE = $fileName . ".out";
			}
			if(filesize($readFILE) < 5*1024 ) {
				$fout = fopen($readFILE, 'r');
				$out = fread($fout, filesize($readFILE));
				fclose($fout);
			} else {
				$out = "Your output was too large to be displayed";
			}
			
			$args = array("lang" => $languages, "data" => $orig, "output" => $out, "location"=>$outDir);
			get_page('display', $args);
		}else{
			$str = "Sorry! This is a broken link! If you had your code here, it may have expired.<br />In order to preserve your code, try talking to me, if you know me, and I'll hook you up.";
			get_page('error', array("error"=>$str) );
		}
	} else {
		$args = array("lang" => $languages);
		get_page('home', $args);
	}
} else {
	get_page("site_down");
}
?>
