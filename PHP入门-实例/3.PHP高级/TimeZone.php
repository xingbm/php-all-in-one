<?php
    //设置时区
    echo '<br/>默认时区时间：'.date("Y-m-d H:i:s").'<br/>';
     
    //可以在文件开头位置设置默认配置的时区
    //也可以在php.ini中进行设置date.timezone（所有文件生效）
    ini_set('date.timezone','Asia/Shanghai');
     
    echo '<br/>上海时区时间：'.date("Y-m-d H:i:s").'<br/>';
     
    //或者直接设置时间格式
    date_default_timezone_set('asia/tokyo');
    echo '<br/>东京时区时间：'.date("Y-m-d H:i:s").'<br/>';
     
    echo '<br/>格式化时间：'.date("YmdHis").'<br/>';
    /*
 
        默认时区时间：2018-09-15 10:44:03
 
        上海时区时间：2018-09-15 16:44:03
 
        东京时区时间：2018-09-15 17:44:03
 
        格式化时间：20180915174403
    */
     
?>
