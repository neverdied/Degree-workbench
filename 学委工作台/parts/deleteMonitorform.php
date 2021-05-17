<?php
$sql="select * from user order by id desc";
$result=mysqli_query($link,$sql);
?>
<html>
    <head>
        
    </head>
    <body>
<div>
    <table>
    <tr class="Obvious">
	<td>id</td>
    <td>user</td>
    <td>password</td>
    <td>class</td>
    <td>del</td>
    </tr>
    <?php
    while($row=mysqli_fetch_row($result)){
        ?>
        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td>
    <form action="" method="post">
    <table>
	<tr><td><input type="hidden" name="id" value="<?php echo $row[0] ?>"></td></tr>
    <tr><td><input type="hidden" name="class" value="<?php echo $row[3] ?>"></td></tr>
    <tr><td><input type="submit" name="deleteMonitor" value="delete"></td></tr>
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