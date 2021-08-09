<?php
    //读取文件
    //readfile('./test.txt');
     
     
    //访问远程文件,需要设置php.ini的 allow_fopen=On
    $html=file_get_contents('http://www.baidu.com');
    //输出html页面
    //echo $html;
     
    //设置时区
    //可以在文件开头位置设置默认配置的时区，也可以在php.ini中进行设置
    ini_set('date.timezone','Asia/Shanghai');
    //date_default_timezone_set('asia/shanghai');
     
    //向文件中写入内容
    /*
        1、打开文件
        2、写入数据
        3、关闭文件
    */
    //$file=fopen('./test.txt','a+');//追加模式
    //$file=fopen('./test.txt','r+');//半覆盖(数据多少覆盖多少)   
    $file=fopen('./test.txt','w+');//全覆盖
    if($file){
        fwrite($file,'写数据123!\r\n换行了吗？\r\n');//单引号不会换行
         
        fwrite($file,"写数据123!\r\n换行了吗？\r\n");//双引号换行
        echo date("Y-m-d H:i:s").'写入数据成功'.date("Ymd His");
        fclose($file);
    }
     
?>
