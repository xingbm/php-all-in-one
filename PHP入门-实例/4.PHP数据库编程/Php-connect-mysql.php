<?php 

    header("Content-Type:text/html;charset=UTF-8");
 
    //连接数据库
    $host='localhost';
    $username='root';
    $password='root';
    $database='php_test';
    $program_char = "utf8" ;
    $conn=mysqli_connect($host,$username,$password,$database) or die('数据库连接失败！');
    mysqli_set_charset( $conn, $program_char);
    echo '数据库连接成功！';
     
    //操作数据库
    $sql='select * from cartoon';
    $result=mysqli_query($conn,$sql);
      
    //读取返回信息
    while($obj=mysqli_fetch_assoc($result)){
        echo $obj['name'].'现在'.$obj['age'].'岁了。<br/>';
    }
     
    //关闭数据库连接
    mysqli_close($conn);
    echo '关闭数据库连接';

?>
