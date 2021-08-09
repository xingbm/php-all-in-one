<?php
    //定义一个类
    class ren {

        public $name;
        public $sex;
        public $age;
        //成员方法
        public function say(){
            echo '我的名字是'.$this->name.'，性别是'.$this->sex.'，'.$this->age.'岁了<br/>';
        }
         
        //构造方法，只要new 就会执行
        function __construct($name,$sex,$age){
            $this->name=$name;
            $this->sex=$sex;
            $this->age=$age;
            echo '构造对象'.$this->name.'<br/>';
        }
         
        //解构方法，程序结束，对象销毁时执行
        function __destruct(){
            echo '解构对象'.$this->name.'<br/>';
        }

    }
    
    //实例化对象
    $xiaoli=new ren('小李','男','25');
    $xiaoli->say();
    /*输出：
        构造对象小李
        我的名字是小李，性别是男，25岁了
        解构对象小李
    */
    
?>
