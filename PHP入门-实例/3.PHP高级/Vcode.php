<?php
 
    vcode(150,100);
     
    //生成验证码
    function vcode($width,$high){
        //创建画布
        $img=imagecreate($width,$high);
         
        //设置背景色 黑色
        $black=imagecolorallocate($img,0,0,0);
        //设置画笔 白色
        $white=imagecolorallocate($img,255,255,255);
         
        //产生随机干扰线条
        for($i=0;$i<$width/20;$i++){
            imageline($img,rand(0,$width),rand(0,$high),rand(0,$width),rand(0,$high),$white);
        }
         
        //产生随机干扰点
        for($i=0;$i<$width;$i++){
            imagesetpixel($img,rand(0,$width),rand(0,$high),$white);
        }
         
        //产生4个随机字母，数字
        $data='';
        for($i=0;$i<4;$i++){
            switch(rand(1,3)){
                case '1':$ch=rand(0,9);break;
                case '2':$ch=sprintf('%c',rand(65,90));break;
                case '3':$ch=sprintf('%c',rand(97,122));break;
            }
            $data=$data.$ch;
        }
         
        //绘制truetype文字
        imagettftext($img,$high/3,rand(1,15),$width*0.1,$high*0.7,$white,'C:/Windows/Fonts/Arial.ttf',$data);
          
        //清理缓存
        ob_clean();
        //解决chrome兼容性问题
        header('Content-type:image/jpeg');
        //输出到浏览器
        imagejpeg($img) or die('创建画布失败');
        imagedestroy($img);
    }
     
?>
