 <html>
        <head>
        <title>Isay</title>
        <link type="text/css" rel="stylesheet" href="../parts/base.css"> 
        </head>
        <body >
            <?php
            include("../parts/Connect.php");
            include("../parts/DeleteSay.php");
            include("../parts/AddHomework.php");
            include("../parts/ChangeClasstable.php");
            include("../parts/DeleteHomework.php");
            ?>

            <?php include("../parts/Home.html"); ?>
            <div class="ClassTable">
                <?php        
                include("../parts/DeleteHomeworkform.php");
                include("../parts/AddHomeworkform.php");
                include("../parts/OddOrevenweek.php");
                include("../parts/ChangeClasstableform.php");
                include("../parts/ChangeClasstableform1.php");        
                mysqli_close($link);
                ?>
            </div>
        </body>
        </html>