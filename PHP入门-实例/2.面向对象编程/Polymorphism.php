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
    //实现接口
    class engine implements tool{
        public $name;
         
        function on(){
            echo '<br/>'.$this->name.'发动机启动<br/>';
        }
        function run(){
            echo '<br/>'.$this->name.'发动机运行<br/>';
        }
        function off(){
            echo '<br/>'.$this->name.'发动机关闭<br/>';
        }
        function __construct($name){
            $this->name=$name;
        }
    }
     
     
    //状态类
    class toolStatus{
        function ts($tool){
            $tool->on();
            $tool->run();
            $tool->off();
        }
    }
     
    //应用多态polymorphism
    $fan=new fan('海尔 ');
    $engine=new engine('奥迪 ');
    $toolStatus=new toolStatus();
     
    $toolStatus->ts($fan);
    $toolStatus->ts($engine);
?>
