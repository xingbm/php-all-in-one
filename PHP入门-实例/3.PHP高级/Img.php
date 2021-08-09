<?php
    //创建画布
    $img=imagecreate(500,500);
     
    //设置颜色
    //背景色
    $white=imagecolorallocate($img,255,255,255);
     
    //画笔
    $black=imagecolorallocate($img,0,0,0);
     
    //矩形
    imagerectangle($img,100,100,300,300,$black);
     
    //输出图像前清理输出缓冲
    ob_clean();
    //解决chrome兼容性问题
    header("Content-type:image/jpeg");
    //输出图像到浏览器
    imagejpeg($img) or die("创建图像失败<br/>");
     
    //释放资源
    imagedestroy($img);
     
?>
