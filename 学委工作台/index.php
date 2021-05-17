<html>
<head>
<title>班长工作台</title>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php
		include("parts/Connect.php");
		$class="soft1703";
		include("parts/changeClass.php");
	   if (stripos($_SERVER['HTTP_USER_AGENT'], 'windows')||stripos($_SERVER['HTTP_USER_AGENT'], 'Mac')||stripos($_SERVER['HTTP_USER_AGENT'], 'Unix') ){
			include("main/IndexPc.php");
		} 
		else {
			include("main/IndexPh.php");
		}
	?>
	<script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget/autoload.js"></script>
</body>