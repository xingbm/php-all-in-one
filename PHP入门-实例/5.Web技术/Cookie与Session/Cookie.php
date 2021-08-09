<?php
 
    //访问时间
    echo '访问时间<br/>';
    if(isset($_COOKIE['visittime'])){
        echo '您上一次访问本网站是在：'.$_COOKIE['visittime'].'<br/>';
        echo '本次访问时间是：'.date('Y-m-d H:i:s').'<br/>';
        setcookie('visittime',date('Y-m-d H:i:s'));
    }else{
        setcookie('visittime',date('Y-m-d H:i:s'));
        echo '这是您第一次访问本网站<br/>';
    }
     
    //访问次数
    echo '访问次数<br/>';
    if(isset($_COOKIE['num'])){
        setcookie('num',$_COOKIE['num']+1);
        echo '这是您第'.$_COOKIE['num'].'次访问本网站<br/>';       
    }else{
        setcookie('num',1+1);
        echo '欢迎您首次访问本网站<br/>';
    }
     
    /*
    访问时间
    您上一次访问本网站是在：2018-09-16 05:09:22
    本次访问时间是：2018-09-16 05:09:32
    访问次数
    这是您第2次访问本网站
    */
     
    //删除cookie，有效时候为过去时间即可，time()-1
    setcookie('num',1,time()-1);
    echo '$_COOKIE[num]已被注销<br/>';
    print_r($_COOKIE);//再一次刷新页面时才会生效！！！
    
?>
