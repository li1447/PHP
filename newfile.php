<?php
//设置头部
header("Content-Type:image/png");

//设置session，必须处于脚本最顶部
// session_start();
$image = imagecreate(100, 30);//设置验证码图片大小
// echo imagesx($image);//获取宽度
// echo imagesy($image);//获取高度
//背景色
$bgcolor = imagecolorallocate($image, 255, 255, 255);
//区域填充
imagefill($image, 0, 0, $bgcolor);

for ($i=0;$i<1000;$i++){//随机生成点
    $x = rand(1,imagesx($image));
    $y = rand(1,imagesy($image));
    $t = imagecolorallocate($image, $i*30, $i*20, $i*10);
    imagesetpixel($image, $x, $y, $t);
}

for($i=0;$i<10;$i++){//随机生成线
    $xianc = imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
    //起点
    $x = rand(1,imagesx($image)/2);
    $y = rand(1,imagesy($image));   
    //终点
    $x1= rand(($image)/2,imagesx($image));
    $y1 = rand(1,imagesy($image));
    imageline($image, $x, $y, $x1,$y1, $xianc);
}

$color = imagecolorallocate($image, 255,0,0);
//空心矩形
imagerectangle($image, 2, 2, 10, 10, $color);
//实心矩形
imagefilledrectangle($image, 2, 2, 10, 10, $color);

$points = array();

//imagepng()建立png图形函数
imagepng($image);
//imagedestroy()结束图形函数，销毁$image
imagedestroy($image);