<?php
    //申明tool类
    class tool{
        function on(){
            echo '<br/>启动<br/>';
        }
        function run(){
            echo '<br/>运行<br/>';
        }
        function off(){
            echo '<br/>关闭<br/>';
        }
    }
     
    //继承inherit
    class fan extends tool{
        function app(){
            $this->on();
            $this->run();
            $this->off();
        }
    }
     
    //简化使用
    $haierFan=new fan();
    $haierFan->app();
    
?>
