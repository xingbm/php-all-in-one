<?php
     
    sum(1,3);

    //定义求和函数，带2个参数
    function sum($a,$b){
        //双引号会输出变量，单引号输出字符串
        echo "$a+$b=".($a+$b);
        echo '<br/>';
        echo '$a+$b='.($a+$b);
    }

?>
