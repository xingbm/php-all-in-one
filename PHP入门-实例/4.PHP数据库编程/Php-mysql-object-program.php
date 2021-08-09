<?php   
    // 创建连接
    $program_char = "utf8" ;
    $conn = new mysqli('localhost', 'root', 'root','php_test')or die("连接失败: " . $conn->connect_error);
    mysqli_set_charset( $conn, $program_char);
    if($conn){
        echo "数据库连接成功！<br/>";
    }
      
    //操作数据库
    $sql = "SELECT * FROM cartoon;";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        echo "name:".$row['name']."-country:".$row['country']."<br/>";
    }
    /*
        name:校长-country:中国
        name:西门庆-country:中国
        name:武大郎-country:中国
        name:武松-country:中国 
    */
    
    $sql = "INSERT INTO cartoon (name, age, country) VALUES ('John', '30', '美国')";
 
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功<br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "INSERT INTO cartoon (name, age, country) VALUES ('马大哈', '30', '美国')";
 
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功<br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    echo "数据库关闭<br/>";

?>