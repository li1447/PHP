<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'DbUntil.class.php';
echo "<pre>";
print_r($_FILES);//获取上传文件的全部信息
echo "</pre>";
echo "<br>";
if (is_uploaded_file($_FILES["filename"]["tmp_name"])){//判断是否为上传文件
    move_uploaded_file(//将文件从临时区域移动到目标地址
        $_FILES["filename"]["tmp_name"],//临时文件地址
        "up/".$_FILES["filename"]["name"] //目标保存地址
        );
}

$dir=(string)"up/".$_FILES['filename']["name"];
$a=new DbUntil("homework");
$sql="insert into dir(name,dizhi) value(?,?)";
$a->addDelUpd($sql, array('abc',$dir), $con);

$sql1="select dizhi from dir where name=?";
$arr=$a->search($sql1,array(a),$con);
if(empty($arr)==null){
    $b=$arr[0]["dizhi"];
}











