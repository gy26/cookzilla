<?php
/**
 * Created by PhpStorm.
 * User: GY
 * Date: 2016/12/3
 * Time: PM5:07
 */

   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>