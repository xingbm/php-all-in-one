<html>
    <form method='post' enctype='multipart/form-data'>
        <input type='file' name='upfile' />
        <input type='submit' value='上传' />
    </form>
</html>
 
<?php
    if(!empty($_FILES)){
        print_r($_FILES);
        $tmpname=$_FILES['upfile']['tmp_name'];//文件临时名
        $name=$_FILES['upfile']['name'];//文件原名
         
        //文件会上传到与该页面文件同一个目录
        move_uploaded_file($tmpname,$name) or die('文件上传失败，程序退出！');
        echo '<br/>文件上传成功！<br/>';
    }else{
        echo '<br/>没有上传文件<br/>';
    }
 
?>

