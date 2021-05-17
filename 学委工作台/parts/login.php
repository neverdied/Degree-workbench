
<?php 
 
	if (isset($_POST['login'])) {
		include("ConnectUser.php");
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$class=trim($_POST['class']);
		$sql=mysqli_query($link,"select id from user where username='$username' and password='$password' and class='$class'");
		$sql1=mysqli_query($link,"select id from admin where username='$username' and password='$password'");
		$result=mysqli_fetch_row($sql);
		$result1=mysqli_fetch_row($sql1);
		if (!$result&&!$result1) {
            ?>

			<script language="javascript"> location.replace("../main/wrong.php") </script>
<?php
		}
		elseif($result1){?>
			<script language="javascript"> location.replace("../main/admin.php") </script>
			<?php
		}
		
	}
 ?>
