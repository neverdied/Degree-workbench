 <html>
    <head>
    <title>Isay</title>
    <link rel="stylesheet" type="text/css" href="../parts/base.css">
    <link rel="stylesheet" type="text/css" href="../parts/index.css">
    </head>
    <body>
		<?php
		include("../parts/Connect.php");
		include("../parts/addMonitor.php"); 
		include("../parts/deleteMonitor.php"); 
		include("../parts/deleteMonitorform.php"); 
		?>
		<form action="" method="post">
			<table>
				<tr><td>username:</td><td><input type="text" name="username"></td></tr>
				<tr><td>password:</td><td><input type="text" name="password"></td></tr>
				<tr><td>class:</td><td><input type="text" name="class"></td></tr>
				<tr><td></td><td><input type="submit" name="register" value="注册"></td></tr>
			</table>
		</form>
		<a href="../index.php"><h1>Home</h1></a>
	</body>
</html>