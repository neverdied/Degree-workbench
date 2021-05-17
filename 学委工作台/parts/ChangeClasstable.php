<?php
if(!empty($_POST['ChangeClassTable'])){
    $result=mysqli_query($link,"delete from ClassTable where id='{$_POST['id']}'");
	$result=mysqli_query($link,"insert into ClassTable set OneClass='{$_POST['OneClass']}',TwoClass='{$_POST['TwoClass']}',ThreeClass='{$_POST['ThreeClass']}',FourClass='{$_POST['FourClass']}',id='{$_POST['id']}',class='{$_POST['class']}'");
}
 if(!empty($_POST['ChangeClassTable1'])){
    $result=mysqli_query($link,"delete from ClassTable1 where id='{$_POST['id']}'");
	$result=mysqli_query($link,"insert into ClassTable1 set OneClass='{$_POST['OneClass']}',TwoClass='{$_POST['TwoClass']}',ThreeClass='{$_POST['ThreeClass']}',FourClass='{$_POST['FourClass']}',id='{$_POST['id']}',class='{$_POST['class']}'");
}
?>