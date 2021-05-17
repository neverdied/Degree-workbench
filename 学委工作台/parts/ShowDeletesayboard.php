<?php
$sql="select * from isay where class='{$class}' order by id desc";
$result=mysqli_query($link,$sql);
?>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="../parts/DeleteSayboard.css"> 
    </head>
    <body>
<div class="DeleteSayboard">
    <table>
    <tr class="Obvious">
    <td>id</td>
    <td>title</td>
    <td>say</td>
    <td>file</td>
    <td>del</td>
    </tr>
    <?php
    while($row=mysqli_fetch_row($result)){
        ?>
        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><a href="../upload/<?php echo $row[3] ?>"><?php echo $row[3] ?></a></td>
        <td>
    <form action="" method="post">
    <table>
    <tr><td><input type="hidden" name="id" value="<?php echo $row[0] ?>"></td></tr>
	<input type="hidden" name="class" value="<?php echo "$class";?>">
    <tr><td><input type="submit" name="submit" value="delete"></td></tr>
    </table>
    </form>
    </td>
        </tr>	
        <?php
    }
    ?>
    </table>
</div>
    </body>
</html>