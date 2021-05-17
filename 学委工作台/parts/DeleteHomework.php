<?php
if(!empty($_POST['DeleteHomework'])){
	$sql=mysqli_query($link,"select * from HomeWork where id='{$_POST['id']}'");
	$result=mysqli_query($link,"delete from HomeWork where id='{$_POST['id']}'");
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
}

?>