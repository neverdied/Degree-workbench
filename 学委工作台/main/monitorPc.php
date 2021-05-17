  <html>
        <head>
        <title>Isay</title>
        <link type="text/css" rel="stylesheet" href="../parts/base.css"> 
        </head>
        <body >
            <div class="left">
                <?php
                include("../parts/DeleteSay.php");
                include("../parts/AddHomework.php");
                include("../parts/ChangeClasstable.php");
                include("../parts/ShowDeletesayboard.php");
                include("../parts/DeleteHomework.php");
                include("../parts/OddOrevenweek.php");
                include("../parts/ChangeClasstableform.php");
                include("../parts/ChangeClasstableform1.php");  
                ?>
            </div>
            <div class="right">
                
            <div class="ClassTable">
                <?php
				include("../parts/Home.php");
                include("../parts/DeleteHomeworkform.php");
                include("../parts/AddHomeworkform.php");      
                mysqli_close($link);
                ?>
            </div>

            </div>
        </body>
        </html>