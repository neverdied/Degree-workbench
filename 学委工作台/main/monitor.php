<?php
	include("../parts/Connect.php");
	$class="soft1703";
if (isset($_POST['login'])||isset($_POST['submit'])||isset($_POST['ChangeClassTable'])||isset($_POST['ChangeClassTable1'])||
    isset($_POST['Homework'])||isset($_POST['DeleteHomework'])||isset($_POST['DeleteHomewor'])) {
	include("../parts/changeClass.php");
    include("../parts/login.php");
   if (stripos($_SERVER['HTTP_USER_AGENT'], 'windows')||stripos($_SERVER['HTTP_USER_AGENT'], 'Mac')||stripos($_SERVER['HTTP_USER_AGENT'], 'Unix')){
      include("monitorPc.php");
    } 
    else {
        include("monitorPh.php");
        }
}
else{
    ?>
	<script language="javascript"> location.replace("../index.php") </script>
<?php
}
    ?>