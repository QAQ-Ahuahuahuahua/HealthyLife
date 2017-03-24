<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/24
 * Time: 15:00
 * To check the user and pwd, if the pwd is right, then success, create a session, while suggest failing
 */
include 'config.php';
$wrong_msg = "";
//Set return page
if(isset($_POST['login_submit'])){
    //Get the values of username and password
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

//Return the userID and pwd from ds
    $mysqli = connect_mysql();
    $sql = "SELECT id,password,salt FROM User WHERE username = ? ";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($userID, $db_pwd,$salt);
        $stmt->fetch();
        $stmt->close();
    }
    $mysqli->close();

//Check the password
    if(!empty($userID)){
        $en_pwd = encrytion_with_salt($salt,$password);
        if($en_pwd==$db_pwd){
        	$_SESSION = array();
            $_SESSION['userID'] = $userID;
            $_SESSION['user'] = $username;
            header('Location:'.$pre_url);
            exit();
        }else{
            $wrong_msg = "You might enter wrong password";
            $_SESSION['msg'] = $wrong_msg;
            header('Location:'.$pre_url);
        }
    }else {
        $wrong_msg = "You might enter wrong username";
        $_SESSION['msg'] = $wrong_msg;
        header('Location:'.$pre_url);
    }
}

?>