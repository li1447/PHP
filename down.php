<?php
header("Content-Type:text/html;charset=utf-8");
$filename = "up/1.jpg";
// header("Content-Type:image/jpeg");//下载文件MIME类型
header("Content-Disposition:attachment;filename=\"${filename}\"");
// header("Content-Length:".filesize($filename));
readfile($filename);