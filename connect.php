<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bgroup = $_POST['bgroup'];
     
    //database connection
    $conn = new mysqli('localhost','root','','sample');
    if($conn->connect_error){
        die("Connection Failed :".$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into users(name,email,phone,bgroup) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name,$email,$phone,$bgroup);
        $stmt->execute();
        echo "registration Successfull....";
        $stmt->close();
        $conn->close();
    }
    
?>