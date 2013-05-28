<?php
/**
 * @category core program
 * @uses define the function used frequently
 * @author Zhu.Guohui
 * @copyright www.hdu.edu.cn
 */

function getSource($file, $line){
	if(!(file_exists($file) && is_file($file))){
		return "";
	}
	$data = file($file);
	$count = count($data) - 1;
	$start = $line - ERROR_SHOW_LINE;
	$start = ($start < 0)?1:$start;
	$end = $line + ERROR_SHOW_LINE;
	$end = ($end > $count)?$count:$end;
	
	$returns = array();
	for($i = $start;$i<$end;$i ++){
		if( $i == $line ){
			$returns[] = "<div id='current'>".$i.".&nbsp;".heightLight($data[$i - 1], TRUE)."</div>";
		}else{
			$returns[] = $i.".&nbsp;".heightLight($data[$i - 1], TRUE);
		}
	}
	return $returns;
} 

function heightLight($code){
	if (preg_match("/<\\?(php)?[^[:graph:]]/", $code)) {
		$code = highlight_string($code, TRUE);
	} else {
		$code = preg_replace("/(&lt;\\?php&nbsp;)+/", "", highlight_string("<?php ".$code, TRUE));
	}
	return $code;
}

// Get the error message
$msg = empty($msg)?"":$msg;
$traces = empty($traces)?"":$traces;
?>
<!doctype html>
<html lang="zh">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $msg; ?></title>
		<link href="<?php echo STYLE_ROOT."error.css"?>" rel="stylesheet" type="text/css" media="screen"/>
	</head>
	<body>
		<div class="container">
			<h2><?php echo $msg; ?></h2>
			<?php 
			foreach ($traces as $trace) {
				if(is_array($trace)&&!empty($trace["file"])){
					$souceline = getsource($trace["file"], $trace["line"]);
					if( $souceline ){
						echo "<ul>";
						echo "<li><span>{$trace["file"]} on line {$trace["line"]}</span></li>";
						echo "</ul>";
						
						echo "<div id='oneborder'>";
						foreach($souceline as $singleline){
							echo $singleline;
						}
						echo "</div>";
					}
					}
			}
			?>
		</div>
	</body>
</html>