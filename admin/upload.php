<?php require_once("../include/common.php");?>
<?php
	$title = "上海复佳办公设备有限公司 - 联系我们";
?>

<?php include("../include/header_admin.inc")?>

<form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>?submit=1" method="post"> 
Send this file: <input name="filename" type="file"> 
<input type="submit" value="确定上传"> 
</form> 

<?php 

if(empty($_GET['submit'])) { 


}else{ 
	$path="../img/upload/"; //上传路径 

	//echo $_FILES["filename"]["type"]; 


	if(!file_exists($path)) 
	{ 
	//检查是否有该文件夹，如果没有就创建，并给予最高权限 
		mkdir("$path", 0700); 
	}//END IF 
	//允许上传的文件格式 
	$tp = array("image/gif","image/jpeg","image/png"); 
	//检查上传文件是否在允许上传的类型 

	if(!in_array($_FILES["filename"]["type"],$tp)) { 
		echo "格式不对"; 
		exit; 
	}//END IF 

	if($_FILES["filename"]["name"]) { 
		$file1=$_FILES["filename"]["name"]; 
		//$file2 = $path.time().$file1;
		$file2 = $path.time().".jpg";
		$flag=1; 
	}//END IF 

	if($flag) $result=move_uploaded_file($_FILES["filename"]["tmp_name"],$file2); 
	//特别注意这里传递给move_uploaded_file的第一个参数为上传到服务器上的临时文件 
	if($result) { 
	//echo "上传成功!".$file2; 
	echo "<script language='javascript'>"; 
	echo "alert(\"上传成功！\");"; 
	$url = substr($file2, 2);
	echo "opener.$('#imageInput').val('$url'); window.close();";
	echo "</script>"; 
	}//END IF 
} 

?>

<?php include("../include/footer.inc")?>