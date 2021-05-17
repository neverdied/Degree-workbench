<?php	
	if(!empty($_POST['changeClass'])||!empty($_POST['submit'])||!empty($_POST['ChangeClassTable'])||!empty($_POST['ChangeClassTable1'])||
    !empty($_POST['Homework'])||!empty($_POST['DeleteHomework'])||!empty($_POST['DeleteHomewor'])||!empty($_POST['home'])){
		$result=mysqli_query($link,"select * from user where class='{$_POST['class']}'");
		$row=mysqli_fetch_row($result);
		if(!empty($row)){
			$class=$_POST['class'];
		}
	}
?>