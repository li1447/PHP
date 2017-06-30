<?php
header("Content-Type:text/html;charset=utf-8");
//设置session，必须处于脚本最顶部
header("Content-Type:image/png");

session_start();

$image = imagecreatetruecolor(100, 40);//设置验证码图片大小
$bgcolor = imagecolorallocate($image,255,255,255);//设置验证码颜色
imagefill($image, 0, 0, $bgcolor);//区域填充
// echo imagesx($image);//获取宽度
// echo imagesy($image);//获取高度
    $color=imagecolorallocate($image,0,0,0);//点点的颜色
        
for($i=0;$i<300;$i++){//随机生成点点
    $x = rand(1,imagesx($image));
    $y = rand(1,imagesy($image));
    $color=imagecolorallocate($image,$i*10,$i*20,$i*30);
    imagesetpixel($image,$x, $y, $color);
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
// imagerectangle($image, 2, 2, 10, 10, $color);
//实心矩形
// imagefilledrectangle($image, 2, 2, 10, 10, $color);
//三角形
// $points = array(2,5,10,2,5,20);//(2,5)是第一个坐标，(10,2)是第二个坐标，(5,20)是第三个坐标
// imagepolygon($image, $points, 3, $color);
//椭圆
// imageellipse($image, $cx, $cy, $width, $height, $color);
//绘制文字
// imagestring($image, 2, 50, 10, "asd", $color);

$fontsize = 20;
$arr = range("a", "z");
//放入数字
for ($i=0;$i<10;$i++){
    array_push($arr, $i);
}
$count = 4;
$codes = "";
for ($i=0;$i<4;$i++){
    $color = imagecolorallocate($image, rand(0,255),rand(0,255),rand(0,255));
    $width = imagesx($image)/$count;
    $code = $arr[array_rand($arr)];
    imagettftext($image,$fontsize, rand(-30,30), $i*($width)+($width-$fontsize)/2,
        (imagesy($image)-$fontsize)/2+$fontsize, $color, "SIMHEI.TTF", $code);
    $codes.=$code;
}

$_SESSION["code"] = $codes;

//imagepng()建立png图形函数
imagepng($image);
//imagedestroy()结束图形函数，销毁$image
imagedestroy($image);