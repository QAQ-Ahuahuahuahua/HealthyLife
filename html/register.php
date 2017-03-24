<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/25
 * Time: 11:27
 */
include 'config.php';
if(isset($_POST['submit'])){
    //Get the user info
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['sex'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    //Chech if it has the same username
    $mysqli = connect_mysql();

    $sql = "SELECT id,username FROM User WHERE username = ? ";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($userID, $db_username);
        $stmt->fetch();
    }
    //Insert data into Nysql
    if(empty($userID)){

        //Encrypted password
        $salt = create_salt($username);
        $final_pwd = encrytion_with_salt($salt,$password);

        $sql = "INSERT INTO User(first_name,last_name,email,gender,username,password,salt,profile_img) VALUES (?,?,?,?,?,?,?,?)";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("ssssssss", $first_name,$last_name,$email,$gender,$username,$final_pwd,$salt,$profile_img);
            $profile_img = "images/users/no-avatar.jpg";
            $stmt->execute();
            $stmt->close();

            $msg = "Success!!Please login！";
            $_SESSION['msg'] = $msg;
        	header('Location:'.$pre_url);;
        }
    } else{
    	$wrong_msg = "The username has already been registered...";
        $_SESSION['msg'] = $wrong_msg;
        header('Location:create-account.php');
    }


    $mysqli->close();


}

