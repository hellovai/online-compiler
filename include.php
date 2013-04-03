<?

//set this to true if you want the site on
$PASS = TRUE;
$FILE_LEN = 6;

$languages = array("c"=>'C', 
			"cpp" => "C++", 
			//"java" => "Java",
			"asm" => "Assembly (x86)",
			);
			
function get_code($str){
	switch($str){
		case "c":
			return 0;
		case "cpp":
			return 1;
#		case "java":
#			return 2;
		case "asm":
			return 3;
		default:
			return -1;
	}
}

function uid($length = 16){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


//returns a relative path to the sample/ directory, without trailing slash
function basePath() {
	$commonPath = __FILE__;
	$requestPath = $_SERVER['SCRIPT_FILENAME'];
	
	//count the number of slashes
	// number of .. needed for include level is numslashes(request) - numslashes(common)
	// then add one more to get to base
	$commonSlashes = substr_count($commonPath, '/');
	$requestSlashes = substr_count($requestPath, '/');
	$numParent = $requestSlashes - $commonSlashes + 1;
	
	$basePath = ".";
	for($i = 0; $i < $numParent-1; $i++) {
		$basePath .= "/..";
	}
	
	return $basePath;
}


function get_page($page, $args = array()) {
	//let pages use some variables
	extract($args);
	
	$basePath = basePath();
	
	$page_include = $basePath . "/views/$page.php";
	
	include("header.php");
	include($page_include);
	include("footer.php");
}

function base_url() {
	return "http://".$_SERVER['SERVER_NAME']."/sample";
}

?>

