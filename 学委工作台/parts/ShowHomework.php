<h2>家庭作业</h2>
<?php
$today=date("Y-m-d",time());
$sql="select * from HomeWork where $today<EndDate && class='{$class}' order by id desc";
$result=mysqli_query($link,$sql);

?>
<table border="1";>
<?php
while($row=mysqli_fetch_row($result)){
        ?>
        <?php if($row[0]!=null){ ?>
        <tr>
            <td>Id</td>
            <td><?php echo $row[0] ?></td>
        </tr>
            <?php } ?>
        <?php if($row[5]!=null){ ?>
        <tr>
            <td>科目</td>
            <td><?php echo $row[5] ?></td>
        </tr>
            <?php } ?>
        <?php if($row[6]!=null){ ?>
        <tr>
            <td>描述</td>
            <td><?php echo $row[6] ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td>开始日期</td>
            <td><?php echo $row[10];  echo "星期".date("w",strtotime("$row[10]"));?></td>
        </tr>
        <tr>
            <td>截止日期</td>
            <td><?php echo $row[11]; echo "星期".date("w",strtotime("$row[11]")); ?></td>
        </tr>
        <?php if($row[1]!=null){ ?>
        <tr>
            <td>Img</td>
            <td><a href="../upload/<?php echo $row[1] ?>" ><img src="../upload/<?php echo $row[1] ?>"></a></td>
        </tr>
        <?php } ?>
        <?php if($row[2]!=null){ ?>
        <tr>
            <td>Img</td>
            <td><a href="../upload/<?php echo $row[2] ?>"><img src="../upload/<?php echo $row[2] ?>"></a></td>
        </tr>
         <?php } ?>
        <?php if($row[3]!=null){ ?>
        <tr>
            <td>Img</td>
            <td><a href="../upload/<?php echo $row[3] ?>"><img src="../upload/<?php echo $row[3] ?>"></a></td>
        </tr>
         <?php } ?>
        <?php if($row[4]!=null){ ?>
        <tr>
            <td>Img</td>
            <td><a href="../upload/<?php echo $row[4] ?>"><img src="../upload/<?php echo $row[4] ?>"></a></td>
        </tr>
           <?php } ?>
        <?php if($row[7]!=null){ ?>
        <tr>
            <td>File</td>
            <td><a href="../upload/<?php echo $row[7] ?>"><?php echo $row[7] ?></a></td>
        </tr>
        <?php } ?>
        <?php if($row[8]!=null){ ?>
        <tr>
            <td>File</td>
            <td><a href="../upload/<?php echo $row[8] ?>"><?php echo $row[8] ?></a></td>
        </tr>
        <?php } ?>
        <?php if($row[9]!=null){ ?>
        <tr>
            <td>File</td>
            <td><a href="../upload/<?php echo $row[9] ?>"><?php echo $row[9] ?></a></td>
        </tr>
        <?php } ?>


        <tr>
            <td colspan="2" class="Obvious">=========分隔线=========</td>
        </tr>
        <tr>
            <td colspan="2" class="Obvious">=======分隔线=============</td>
        </tr>
        <?php
}
    ?>
</table>