<?php
if(!empty($_POST['Homework'])){
	$result=mysqli_query($link,"insert into HomeWork set Title='{$_POST['Title']}',StartDate='{$_POST['StartDate']}',EndDate='{$_POST['EndDate']}',Content='{$_POST['Content']}',ImgOne='{$_FILES['ImgOne']['name']}',ImgTwo='{$_FILES['ImgTwo']['name']}',ImgThree='{$_FILES['ImgThree']['name']}',ImgFour='{$_FILES['ImgFour']['name']}',FileOne='{$_FILES['FileOne']['name']}',FileTwo='{$_FILES['FileTwo']['name']}',FileThree='{$_FILES['FileThree']['name']}',class='{$_POST['class']}'");
    move_uploaded_file($_FILES["ImgOne"]["tmp_name"], "../upload/" . $_FILES["ImgOne"]["name"]);
	move_uploaded_file($_FILES["ImgTwo"]["tmp_name"], "../upload/" . $_FILES["ImgTwo"]["name"]);
	move_uploaded_file($_FILES["ImgThree"]["tmp_name"], "../upload/" . $_FILES["ImgThree"]["name"]);
	move_uploaded_file($_FILES["ImgFour"]["tmp_name"], "../upload/" . $_FILES["ImgFour"]["name"]);
	move_uploaded_file($_FILES["FileOne"]["tmp_name"], "../upload/" . $_FILES["FileOne"]["name"]);
	move_uploaded_file($_FILES["FileTwo"]["tmp_name"], "../upload/" . $_FILES["FileTwo"]["name"]);
	move_uploaded_file($_FILES["FileThree"]["tmp_name"], "../upload/" . $_FILES["FileThree"]["name"]);
}
?>