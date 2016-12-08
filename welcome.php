<?php
/**
 * Created by PhpStorm.
 * User: GY
 * Date: 2016/12/3
 * Time: PM5:06
 */
include('session.php');
?>
<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>