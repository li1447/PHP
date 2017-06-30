<?php
header("Content-Type:text/html;charset=utf-8");
// $dir = "C:/Users/Administrator/Desktop/test";
// echo file_exists($dir);                  //检测文件或目录是否存在

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo filesize($dir);                     //返回文件字节数

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo is_readable($dir);              //判断文件是否可读

// date_default_timezone_set("Asia/Chongqing");
// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $time =  filectime($dir);            //创建时间
// echo date("Y-m-d H:i:s",$time);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $sta = stat($dir);                      //获取文件大部分属性
// print_r($sta);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo basename($dir);                //返回最后一级目录
// echo basename($dir,".txt");        //第二个参数筛选类型，返回去掉文件后缀

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo dirname($dir);                     //返回不带文件的路径

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// print_r(pathinfo($dir));                //返回路径信息的一个数组

// $dir = "C:/Users/Administrator/Desktop";
// $res = opendir($dir);                //打开目录得到资源类型
// while (!!$file = readdir($res)){//读取目录
// //     echo $file."<br>";            //输出文件
//     //解决中文乱码
//     echo iconv("GB2312", "utf-8", $file)."<br>";
// }
// closedir($dir);                          //关闭目录资源

// $dir = "C:/Users/Administrator/Desktop/tes";
// mkdir($dir);                             //创建目录

// $dir = "C:/Users/Administrator/Desktop/test";
// rmdir($dir);                             //删除一个目录

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// unlink($dir);                            //删除文件

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "a+");      //打开文件获得资源,a+代表指针在末尾，并且可读写
// fwrite($res, "你好!");            //写入文件内容
// fclose($res);                       //关闭文件资源

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "r+");//以可读写的方式打开，并且指针在开始
// echo fread($res, 20);//读取资源文件，20个长度，有可能有空白
// fclose($res);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "r+");
// echo fgets($res);//读取一行，默认1024
// fclose($res);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "r+");
// $str = "";
// while (!!$t = fgetc($res)){//读取一个长度，指针后移，最后返回false
//     $str.=$t;
// }//通过此方式可以读取全文件内容
// echo $str;
// fclose($res);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo file_get_contents($dir);//获取全部

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// print_r(file($dir));             //返回文件信息数组

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// echo readfile($dir);            //返回文件信息及字节数

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "a+");
// fread($res, 3);
// echo ftell($res);//返回资源文件指针当前位置

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res = fopen($dir, "a+");
// fseek($res, 3);//移动指针
// echo fread($res, 3);
// rewind($res);//将指针移动到开始位置
// fseek($res, 3,SEEK_CUR);//从当前位置开始移动
// echo fread($res, 3);

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $dir1 = "C:/Users/Administrator/Desktop/test/bb.txt";
// copy($dir, $dir1);//复制文件

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// $res =fopen($dir, "a+");
// ftruncate($res, 10);//将原文件截取成新文件

// $dir = "C:/Users/Administrator/Desktop/test/aa.txt";
// rename($dir, "C:/Users/Administrator/Desktop/test/cc.txt");//重命名文件或目录名











