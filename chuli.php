<?php
header("Content-Type:text/html;charset=utf-8");

session_start();
$ycode = $_SESSION["code"];
$code = $_POST["code"];
$reg = "/^${ycode}$/i";
if (preg_match($reg, $code)){
    echo "成功！";
}else{
    echo "输入错误！";
}