    <html>
    <head>
    <title>Isay</title>
    <link rel="stylesheet" type="text/css" href="parts/base.css">
    <link rel="stylesheet" type="text/css" href="parts/index.css">
    </head>
    <body>
    <?php
    include("parts/Connect.php");
    ?>   

        <div class="ClassTable">
            <?php
            include("parts/ShowClasstable.php");
            include("parts/ShowHomework.php");
            mysqli_close($link);
            ?> 
        </div>
        <div class="note_2">
            <h1>班长登录</h1>
            <div class="Login">
                <?php
                include("parts/Loginform.html");
                ?>
            </div>
			<?php
			include("parts/ChangeClassform.php"); 
			?>
        </div>
    </body>
    </html>