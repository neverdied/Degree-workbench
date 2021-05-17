<h2>添加家作</h2>
<form action="" method="post" enctype="multipart/form-data">
<table border="1">
<tr><td>科目: </td><td><input type="text" name="Title"></td></tr>
<tr><td>描述: </td><td><textarea name="Content"></textarea></td></tr>
<tr><td>图片: </td><td><input type="file" name="ImgOne"></td></tr>
<tr><td>图片：</td><td><input type="file" name="ImgTwo" ></td></tr>
<tr><td>图片：</td><td><input type="file" name="ImgThree"></td></tr>
<tr><td>图片：</td><td><input type="file" name="ImgFour" ></td></tr>
<tr><td>文件：</td><td><input type="file" name="FileOne" ></td></tr>
<tr><td>文件：</td><td><input type="file" name="FileTwo" ></td></tr>
<tr><td>文件：</td><td><input type="file" name="FileThree" ></td>
<input type="hidden" name="class" value="<?php echo "$class";?>"></tr>

    <input type="hidden" name="StartDate" value="<?php echo date("Y-m-d",time()) ?>">
<tr><td>截止日期：</td><td><input type="date" name="EndDate" ></td></tr>   
<tr><td colspan="2"><input type="submit" name="Homework" value="Create homework"></td></tr>
</table>
</form>