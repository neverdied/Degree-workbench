<?php
if(!empty($_POST['deleteMonitor'])){
	$result=mysqli_query($link,"delete from user where id='{$_POST['id']}'");
	$result=mysqli_query($link,"delete from classtable where class='{$_POST['class']}'");
	$result=mysqli_query($link,"delete from classtable1 where class='{$_POST['class']}'");
	$sql=mysqli_query($link,"select * from HomeWork where class='{$_POST['class']}'");
		while($row=mysqli_fetch_row($sql)){
		if(is_file("../upload/"."$row[1]") === true){
			unlink( "../upload/"."$row[1]");
		}
		if(is_file("../upload/"."$row[2]") === true){
			unlink( "../upload/"."$row[2]");
		}
		if(is_file("../upload/"."$row[3]") === true){
			unlink( "../upload/"."$row[3]");
		}
		if(is_file("../upload/"."$row[4]") === true){
			unlink( "../upload/"."$row[4]");
		}
		if(is_file("../upload/"."$row[7]") === true){
			unlink( "../upload/"."$row[7]");
		}
		if(is_file("../upload/"."$row[8]") === true){
			unlink( "../upload/"."$row[8]");
		}
		if(is_file("../upload/"."$row[9]") === true){
			unlink( "../upload/"."$row[9]");
		}
	}
	$result=mysqli_query($link,"delete from homework where class='{$_POST['class']}'");
	$sql1=mysqli_query($link,"select filename from isay where class='{$_POST['class']}'");
		while($row=mysqli_fetch_row($sql1)){
		if(is_file("../upload/"."$row[0]") === true){
			unlink( "../upload/"."$row[0]");
		}
	}
	$result=mysqli_query($link,"delete from isay where class='{$_POST['class']}'");
}
?>