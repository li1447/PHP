<?php 
header("Content-Type:text/html;charset=utf-8");?>
<form method="post" enctype="multipart/form-data" action="upfile.php">
	上传文件:<input type="file"  name="filename"><br />
	<input type="submit" value="上传">
</form>
<a href="down.php">下载</a>