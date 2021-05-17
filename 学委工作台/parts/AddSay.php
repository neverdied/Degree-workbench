<?php
if(!empty($_POST['submit'])){
	$result=mysqli_query($link,"insert into isay set title='{$_POST['title']}',say='{$_POST['content']}',filename='{$_FILES['file']['name']}',class='{$_POST['class']}'");
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
}
?>