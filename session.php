<?php
/**
 * Created by PhpStorm.
 * User: GY
 * Date: 2016/12/3
 * Time: PM5:07
 */

   include('connect.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from user where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
       //echo "you have not log in, please log in";
       header("location:login.php?");
   }
?>