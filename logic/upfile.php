<?php
/* 上传文件 */
function upfile($file_var,$tofile,$filepath){
	/* 参数说明:

	*/
	
	if(!is_writable($filepath)){
		echo "$filepath 目录不存在或不可写";
		return false;
		exit;
	}
	
	//echo $_FILES["$file_var"]['name'];
	$Filetype=substr(strrchr($_FILES["$file_var"]['name'],"."),1);
	($tofile==='')?($uploadfile = $_FILES["$file_var"]['name']):($uploadfile = $tofile.".".$Filetype);//文件名
	$Array[tofile] = $tofile.'.'.$Filetype;
	$Array[oldfile]= $_FILES["$file_var"]['name'];
	if(!($uploadfile==='')){
		if (!is_uploaded_file($_FILES["$file_var"]['tmp_name'])){
			echo $_FILES["$file_var"]['tmp_name']." 上传失败.";
			return false;
			exit;
		}
		if (file_exists($filepath.'/'.$uploadfile)) {
			print "$uploadfile 文件重名！请改名上传";
			return false;
			exit;
		}
		if (!move_uploaded_file($_FILES["$file_var"]['tmp_name'],$filepath.'/'.$uploadfile)){
			echo "上传失败。错误信息:\n";
			print_r($_FILES);
			exit;
		}else{
			return $Array;
		}
	}else{
		return false;
		echo"无法上传";
	}
}
//取后缀
function get_extension($file)
{
	return end(explode('.', $file));
}

?>