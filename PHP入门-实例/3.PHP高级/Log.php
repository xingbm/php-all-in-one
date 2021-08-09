<?php
    /*
        1、设置php.ini文件
        2、日志分类
        3、查看日志
    */
     
    //生成运行日志
    error_log("FORM ".__FILE__." ERROR LINE:".__LINE__);
    /*需要设置正确的日志路径，确保路径存在
        [15-Sep-2018 09:31:45 Europe/Berlin]
        这是来自C:/xampp/htdocs/basic/log.php 的一段自定义的报错日志信息
    */
     
    //生成系统日志
    openlog('PHP7',LOG_PID,LOG_USER);
    syslog(LOG_WARNING,'向syslog发送自定义信息');
    closelog();
     
  
    try{
        $a=10;
        if(isset($b)){
            echo "程序正常执行";
        }else{
            throw new Exception();
        }     
    }catch(Exception $e){
        ERROR_LOG("错误代码所在路径：".$e->getFile());
        ERROR_LOG( "错误代码所在行号：".$e->getLine());
    }
    echo "<br/>程序执行完毕<br/>";
    /*
    [15-Sep-2018 09:44:41 Europe/Berlin] 错误代码所在路径：C:\xampp\htdocs\basic\log.php
    [15-Sep-2018 09:44:41 Europe/Berlin] 错误代码所在行号：26
    */
     
    //输出日志 依赖于文件的读写操作，后续将会学习
     
?>
