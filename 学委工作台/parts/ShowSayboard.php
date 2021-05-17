<h2>暂存处</h2>
<?php
$sql="select * from isay where class='{$class}'  order by id desc";
$result=mysqli_query($link,$sql);
?>
<table width=60%>
<tr class="Obvious">
<td>id</td>
<td>title</td>
<td>say</td>
<td>file</td>
<td>class</td>
</tr>
<?php
while($row=mysqli_fetch_row($result)){
	?>
	<tr>
	<td><?php echo $row[0] ?></td>
	<td><?php echo $row[1] ?></td>
	<td><?php echo $row[2] ?></td>
    <td><a href="upload/<?php echo $row[3] ?>"><?php echo $row[3] ?></a></td>
	<td><?php echo $row[4] ?></td>
	</tr>	
	<?php
}
?>
</table>