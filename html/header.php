<?php
/**
 * Created by PhpStorm.
 * User: zjh
 * Date: 2017/2/24
 * Time: 20:07
 */?>
<?php
setcookie("url",$_SERVER['REQUEST_URI'],time()+3600);
include 'config.php';?>
<link href="css/test.css" rel='stylesheet' type='text/css' />
<!--<link href="css/header/style.css" rel="stylesheet">-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<header class="row">
		<div class="title">
			<div class="container">
				<div class="logo">
					<h1 class="head"><a href="index.html">The Wonderful</a></h1>
					<p>lets make a Life style</p>
				</div>
				<div class="dwd-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-qq"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
		<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          			<ul class="nav navbar-nav navigation">
                    	<li><a href="index.php">
                    	<i class="fa fa-home fa-fw" aria-hidden="true"></i>HOME</a></li>
                    	<!--<div class="dropdown">-->
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" > 
                                <i class="fa fa-coffee fa-fw" aria-hidden="true"></i>                                
                                CAFE
                                	 <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                               	</a>                     
                                 <ul class="dropdown-menu">
                                 <li><a href="index.php#cafe">
                                 <i class="fa fa-lemon-o fa-fw" aria-hidden="true"></i>
                                 	WHAT'S HERE TODAY?</a></li>
                                 <li><a href="cafe.php">
                                 <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>
                                 ORDER NOW</a></li>
                                 <li><a href="index.php#contact">
                                 <i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>
                                 
                                 HELP</a></li>
                                 </ul>
                                 <!--<div class="dropdown-content_">
                                 	<a href="../Downloads/cpts_453_ua/index-html.html">WHAT'S HERE TOFAY?</a>
                                 	<a href="../Downloads/cpts_453_ua/index-html.html">ORDER NOW</a>
                                 	<a href="../Downloads/cpts_453_ua/index-html.html">HELP</a>
                                 </div>-->
                                 
                         </li>
                        <!--</div>-->
                        <li><a href="lifestyle.php">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                        LIFESTYLE</a></li>
                        <li><a href="recipes.php">
                        <i class="fa fa-cutlery fa-fw" aria-hidden="true"></i>
                        RECIPES</a></li>
                        <li><a href="index.php#about">
                        <i class="fa fa-comment fa-fw" aria-hidden="true"></i>
                        ABOUT</a></li>
                        <li><a href="index.php#contact">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        CONTACT</a></li>

                          
                          
                          
                                
                          
                       
        
<?php
if(isset($_SESSION['user'])) {?>

        <li><a href="logout.php"><? echo "Logout: ".$_SESSION['user'].""; ?></a></li>

<? } else { ?>
<li>
    <!--<img src="images/the wonderful/shopping-icon.png" height="30" width="30" alt="shopping cart" background-color="black">-->
	<a href="#" data-toggle="modal" data-target="#myModal" id="login_btn"><i class="fa fa-sign-in"></i>Login</a>
    <!--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="login_btn">Login</button>-->
</li>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-12 container">
                <h1 class="margin-bottom-15">Login</h1>
                <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="login.php" method="post">
                	<div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button><?php echo $_SESSION['msg'] ?>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="control-wrapper">
                                <label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="control-wrapper">
                                <label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox control-wrapper pull-left">
                                <label>
                                    <input type="checkbox" class="pull-left"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="control-wrapper">
                                <input type="submit" value="Log in" class="btn btn-info text-left pull-left" name="login_submit">
                                <a href="forgot-password.php" class="text-right pull-right">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Login with: </label>
                            <div class="inline-block">
                                <a href="#"><i class="fa fa-facebook-square login-with"></i></a>
                                <a href="#"><i class="fa fa-twitter-square login-with"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square login-with"></i></a>
                                <a href="#"><i class="fa fa-tumblr-square login-with"></i></a>
                                <a href="#"><i class="fa fa-github-square login-with"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="create-account.php" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<? if(isset($_SESSION['msg'])){?>
<script type="text/javascript">
	var wrong_msg = <?php echo isset($_SESSION['msg']) ?> ? "<?php echo $_SESSION['msg'];?>" : null;
	$(function (){

		if(wrong_msg!=null){
			$('#myModal').modal('show');
			$('.alert-danger').show();
		}

	});
</script>
<?php unset($_SESSION['msg']);}
} ?>
          </ul>
				</div><!-- /.navbar-collapse -->
						<div class="clearfix"> </div>

			  </div><!-- /.container-fluid -->
			</nav>
			
		<!-- //navigation -->
  <script type="text/javascript">

  </script>
<script type="text/javascript" src="script/header.js"></script>
	</header>