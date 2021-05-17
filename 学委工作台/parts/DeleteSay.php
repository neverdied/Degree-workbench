<?php
if(!empty($_POST['submit'])){
	$sql=mysqli_query($link,"select filename from isay where id='{$_POST['id']}'");
	$result=mysqli_query($link,"delete from isay where id='{$_POST['id']}'");
	while($row=mysqli_fetch_row($sql)){
		if(is_file("../upload/"."$row[0]") === true){
			unlink( "../upload/"."$row[0]");
		}
	}
}

?>