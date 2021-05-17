<?php
$link=@mysqli_connect("localhost","root","kYRW8Mf9","user");
mysqli_query($link,"set names utf-8");
$sql="select * from user";
$result=mysqli_query($link,$sql);
?>
<table width=60%>
<tr>
<td>id</td>
<td>title</td>
</tr>
<?php
while($row=mysqli_fetch_row($result)){
	?>
	<tr>
	<td><?php echo $row[0] ?></td>
	<td><?php echo $row[1] ?></td>
	</tr>	
	<?php
}
?>
</table>