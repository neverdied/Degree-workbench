<?php
$i=5;
if(!empty($_POST['register'])){
	$result=mysqli_query($link,"insert into user set username='{$_POST['username']}',password='{$_POST['password']}',class='{$_POST['class']}'");
	while($i){
		$result1=mysqli_query($link,"insert into ClassTable set class='{$_POST['class']}'");
		$result2=mysqli_query($link,"insert into ClassTable1 set class='{$_POST['class']}'");
		$i--;
	}
}
?>