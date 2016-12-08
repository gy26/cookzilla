<?php
/**
 * Created by PhpStorm.
 * User: GY
 * Date: 2016/11/30
 * Time: PM7:57
 */


   // $name=$_POST['name'];//post获取表单里的name
    // $password=$_POST['password'];//post获取表单里的password
    try{
    include('connect.php');//链接数据库
    //$q="insert into user(id,username,password) values (null,'$name','$password')";//向数据库插入表单传来的值的sql
    //$reslut=mysql_query($q,$con);//执行sql

    $stmt = $db->prepare("INSERT INTO User(username,realname,password,profile) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $username, $realname, $password,$profile);

    // insert another row
    $username = "Julie";
    $realname = "Dooley";
    $password= "julie@example.com";
    $profile="good person";
    $stmt->execute();
    echo "New records created successfully";
    }
    catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    $conn = null;

?>