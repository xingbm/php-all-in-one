<?php
    //申明接口
    interface tool{
        function on();
        function run();
        function off();
    }
     
    //实现接口
    class fan implements tool{
        public $name;
        function on(){
            echo '<br/>'.$this->name.'风扇启动<br/>';
        }
        function run(){
            echo '<br/>'.$this->name.'风扇运行<br/>';
        }
        function off(){
            echo '<br/>'.$this->name.'风扇关闭<br/>';
        }
         
        function __construct($name){
            $this->name=$name;
        }
    }
     
    //继承inherit
    class haierfan extends fan{
        function app(){
            $this->on();
            $this->run();
            $this->off();
        }
    }
     
    //实例化
    $fan=new fan('美的 ');
    $fan->on();
    $fan->run();
    $fan->off();
     
    echo '<br/> ------------分割线------------ <br/>';
     
    //实例化
    $haierfan=new haierfan('海尔 ');
    $haierfan->app();
     
?>

