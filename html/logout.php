<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/24
 * Time: 21:16
 */
include 'config.php';
header('Location:'.$pre_url);
session_start();
$_SESSION = array();
echo "You are now logged out.";
exit;
?>