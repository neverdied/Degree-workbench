<html>
    <head>

    </head>
    <body>
        <h2>修改课程表</h2>     
        <?php
        $sql="select * from ClassTable where class='{$class}' order by id ";
        $result=mysqli_query($link,$sql);
        ?>

        <table border="1"  >
              <tr><td colspan="6">A周</td></tr>
        <tr>
            <td></td>
        <td>第一节课</td>
        <td>第二节课</td>
        <td>第三节课</td>
        <td>第四节课</td>
        <td>提交</td>
        </tr>
        <?php
        while($row=mysqli_fetch_row($result)){
            ?>
            <form action="" method="post">
			<input type="hidden" name="class" value="<?php echo "$class";?>">
            <tr <?php if($row[0]%5+1==date("w")&&date("W")%2==1){echo "class='Obvious'";} ?>>
            <td>星期<?php echo $row[0]%5+1 ?><input type="hidden" name="id" value="<?php echo $row[0] ?>"></td>
            <td><input type="text" name="OneClass" value="<?php echo $row[1] ?>" style="width:100%"></td>
            <td><input type="text" name="TwoClass" value="<?php echo $row[2] ?>" style="width:100%"></td>
            <td><input type="text" name="ThreeClass" value="<?php echo $row[3] ?>" style="width:100%"></td>
            <td><input type="text" name="FourClass" value="<?php echo $row[4] ?>" style="width:100%"></td>
            <td><input type="submit" name="ChangeClassTable" value="修改课程表"></td>
            </tr>
            </form>
            <?php
        }
        ?>
        </table>
    </body>
</html>