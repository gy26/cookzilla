<?php
/**
 * Created by PhpStorm.
 * User: GY
 * Date: 2016/11/30
 * Time: PM6:30
 */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'cookzilla');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if(!$db){
        die("can't connect....".mysqli_error());//如果链接失败输出错误
    }

?>