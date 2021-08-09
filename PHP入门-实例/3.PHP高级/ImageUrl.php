<?php
    $img=imagecreatefromjpeg('https://b-ssl.duitang.com/uploads/item/201607/04/20160704052649_WLyfB.jpeg');
     
    ob_clean();
    header('Content-type:image/jpeg');
    imagejpeg($img) or die('创建图形失败');
    imagedestroy($img);
     
?>

