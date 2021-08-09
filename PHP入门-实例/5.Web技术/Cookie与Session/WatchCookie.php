<?php
      
    //创建cookie
    $sta=setcookie('testcookiename','testvalue',time()+60*60);
    if($sta){
        echo 'Cookie设置成功！';
    }
?>

