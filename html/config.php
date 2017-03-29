<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/24
 * Time: 16:19
 * Connect mysql
 */
//Start session
session_start();
//Get redirect url
if(isset($_COOKIE['url'])){
    $pre_url = $_COOKIE['url'];
}


//Connect MySQK
function connect_mysql(){
    $server = "";
    $db_username = "";
    $db_password = "";
    $database = "";
    $mysqli = new mysqli($server, $db_username, $db_password, $database);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    return $mysqli;
}

//create salt
function create_salt($username){
    $random = dechex(rand());
    $salt = $username.$random;
    return $salt;
}

function encrytion_with_salt($salt,$password){
    $temp = $password.$salt;
    $final_pwd = md5(md5($temp));
    return $final_pwd;
}

?>