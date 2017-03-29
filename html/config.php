<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/24
 * Time: 16:19
 * Connect mysql
 */
$baseUrl ='http://playground.eca.ed.ac.uk/~s1614491/';
//Start session
session_start();
//Get redirect url
if(isset($_COOKIE['url'])){
    $pre_url = $_COOKIE['url'];
}


//Connect MySQK
function connect_mysql(){
    $server = "playground.eca.ed.ac.uk";
    $db_username = "s1614491";
    $db_password = "g7i823VKtR";
    $database = "s1614491";
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