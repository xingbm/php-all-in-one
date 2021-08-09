<?php
    echo '当前执行脚本文件名：'.$_SERVER['PHP_SELF'].'<br/>';
    echo '当前执行脚本根目录：'.$_SERVER['DOCUMENT_ROOT'].'<br/>';
    //单行注释
    echo '当前执行脚本绝对路径：'.$_SERVER['SCRIPT_FILENAME'].'<br/>';
    //print_r($_SERVER);
     
    //返回当前文件名，行号
    echo '当前文件名称：<strong>'.__FILE__.'</strong><br/>';
    echo '当前行号：<strong>'.__LINE__.'</strong><br/>';
?>
