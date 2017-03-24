<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/25
 * Time: 11:21
 */
include 'config.php';
?>

<!DOCTYPE html>
<head>
    <title>Create Account</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-gray">
<h1 class="margin-bottom-15">Create Account</h1>
<div class="container">
    <div class="col-md-12">
        <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="register.php" method="post" id="create_form">
            <div class="form-inner">
            	<div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button><?php echo $_SESSION['msg'] ?>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="first_name" class="control-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="please input first_name" name="first_name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="last_name" class="control-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="please input last_name" name="last_name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="please input email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="please input username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="optionsRadios1" value="M" required> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="optionsRadios2" value="F"> Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="please input password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="password" class="control-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirm" placeholder="confirm your password" name="password_confirm">
                    </div>
                </div>
                <div class="form-group"> </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Create account" class="btn btn-info" name="submit">
                        <a href="<?php echo $pre_url;?>" class="pull-right">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<? if(isset($_SESSION['msg'])){?>
<script type="text/javascript">
	var wrong_msg = "<?php echo $_SESSION['msg'];?>";
</script>
<?php unset($_SESSION['msg']);}?>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="script/create_account.js"></script>
</body>
</html>
