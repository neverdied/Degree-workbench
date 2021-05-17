<h2>课程表</h2>
<?php
if(date("W")%2==1){
    $sql="select * from ClassTable where class='{$class}' order by id ";
    $result=mysqli_query($link,$sql);
?>
<table border=1>
<tr>
    <td></td>
<td>第一节课</td>
<td>第二节课</td>
<td>第三节课</td>
<td>第四节课</td>
</tr>
<?php
while($row=mysqli_fetch_row($result)){
	?>
   
    
    <div class="today">
	<tr <?php if($row[0]%5+1==date("w")){echo "class='Obvious'";} ?>>
        <td>星期<?php echo $row[0]%5+1 ?></td>
	<td><?php echo $row[1] ?></td>
	<td><?php echo $row[2] ?></td>
	<td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
	</tr>
    </div>
    
	<?php
}
        }
        else{
$sql="select * from ClassTable1 where class='{$class}' order by id ";
$result=mysqli_query($link,$sql);
?>
<table width=60% border=1>
<tr>
    <td></td>
<td>第一节课</td>
<td>第二节课</td>
<td>第三节课</td>
<td>第四节课</td>
</tr>
<?php
while($row=mysqli_fetch_row($result)){
	?>

	<tr <?php if($row[0]%5+1==date("w")){echo "class='Obvious'";} ?> >
        <td>星期<?php echo $row[0]%5+1 ?></td>
	<td><?php echo $row[1] ?></td>
	<td><?php echo $row[2] ?></td>
	<td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
	</tr>	
       
	<?php
}          }
?>
</table> 