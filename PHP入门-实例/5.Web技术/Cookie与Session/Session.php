<?php
    /*
        session技术
        session存储在服务器，更安全，没有长度限制
        而cookie存储在客户机，客户可以禁用cookie
        session可以用于跨页面请求，有一个随机生成的唯一的session_id
        典型的应用就是购物车
         
    */
     
    //准备工作，设置php.ini的session.save_path="C:\xampp\tmp"
    //启动会话
    session_start();
     
    //设置session
    $_SESSION['name']='Peter';
    $_SESSION['password']='12345';
     
    echo 'Session 创建成功！<br/>';
    /*打开服务器的session文件查看
        name|s:5:"Peter";password|s:5:"12345";
    */
     
    print_r($_SESSION);
    //清空session，session文件只是清空
    $_SESSION=array();
    echo '<br/>注销当前回话session<br/>';
    print_r($_SESSION);
     
    //销毁session文件，session文件会被删掉
    session_destroy();
    echo '<br/>session已经彻底销毁<br/>';
    print_r($_SESSION);

?>
