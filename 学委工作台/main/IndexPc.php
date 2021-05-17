 <html>
    <head>
    <title>Isay</title>
    <link rel="stylesheet" type="text/css" href="parts/base.css">
    <link rel="stylesheet" type="text/css" href="parts/index.css">
    </head>
    <body>
        <div class="left">
            <?php
			
            include("parts/Connect.php");
            include("parts/AddSay.php");
            include("parts/ShowSayboard.php");
            ?>   
        </div>
        <div class="right">
            <div class="ClassTable">
                <?php
                include("parts/ShowClasstable.php");
                include("parts/ShowHomework.php");
				mysqli_close($link); 
                ?> 
            </div>
            <div class="note_1">
                ADD
                <div class="add">
                    <?php
                    include("parts/AddSayform.html");
                    ?>
                    <br>
                    <br>
                </div>
            </div>
            <div class="note_2">
            LOGIN
                <div class="Login">
                    <?php
                    include("parts/Loginform.html");
                    ?>
                </div>
				
			<?php
			include("parts/ChangeClassform.php"); 
			?>
            </div>
        </div>
    </body>
    </html>