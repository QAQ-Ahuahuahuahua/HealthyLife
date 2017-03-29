<?php
/**
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Proceed to checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/cafe/grid.css">
    <link rel="stylesheet" href="css/cafe/style.css">
    <link rel="stylesheet" href="css/cafe/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">	
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
<?php include 'header.php';?>
<div class="container">
 <div class="row">
        <div class="container_12"> <!-- .grid_3 -->

            <div class="">
              
                       <ul id="cart_nav">
                        <li>
                            <a class="cart_li" >
                                <div class="cart_ico"></div>
                                Cart
                                £<span class="total_price">0.0</span>
                            </a>
                            <ul class="cart_cont">
                                <li id="food_list" class="no_border recently">Recently added item(s)</li>
                        <?php 
                        if(isset($_SESSION['userID'])){
                        	$user_id = $_SESSION['userID'];
                        	$mysqli = connect_mysql();
                        	$sql = "SELECT f.img_url,f.food_name,f.price,sc.food_id,sc.quantity FROM Food f,Shopping_cart sc WHERE f.id=sc.food_id AND sc.user_id=?;";
                        	$total_price=0.0;
                        	if ($stmt = $mysqli->prepare($sql)) {
                        		$stmt->bind_param("i", $user_id);
                        		$stmt->execute();
                        		$stmt->bind_result($o_img_url,$o_food_name,$o_price,$food_id,$quantity);
                        		while($stmt->fetch()){?>
                        	                        		<li id="<?php echo $food_id.$user_id;?>">
                        	                                    <a  class="prev_cart"><div class="cart_vert"><img src="<?php echo $o_img_url;?>" alt="Product 2" title=""></div></a>
                        	                                    <div class="cont_cart">
                        	                                        <h4><?php echo $o_food_name;?></h4>
                        	                                        <div class="price"><span class="qantity"><?php echo $quantity?></span> x <span>£ <?php echo $o_price;?></span></div>
                        	                                    </div>
                        	                                </li>
                        	                        	<?php $total_price=$o_price*$quantity+$total_price;}
                        	                        	$stmt->close();
                        	                        }   ?>                     
                        	                         
                        	                         <script>
                        	                         var total_p = "<?php echo $total_price;?>";
                        	                         $('.total_price').text(total_p);
                        	                         </script>
                       <?php }?> 

                                <li id ="check_part" class="no_border">
                                    <a href="shopping_cart.php" class="view_cart">View shopping cart</a>
                                    <a href="checkout.php" class="checkout">Procced to Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->
            </div><!-- .grid_9 -->
        </div>
    </div>
</div>
<div class="container">
    <section id="main">
        <div class="container_12">
            <div id="content" class="">
                <header>
                    <h1 class="page_title">Checkout</h1>
                </header>
                    
                <article id="checkout_info" class="">
		    <ul class="checkout_list">
			<li class="active">
			    <div class="list_header"><div class="number">1</div>Checkout Method</div>
			    <div class="list_body">
				<form class="input_group">
				    <h3>Checkout as a Guest or Register</h3>
				    <p>Register with us for future convenience:</p>
				    <ul class="radio">
					<li><input class="niceRadio" type="radio" name="register"> Checkout as Guest</li>
					<li><input class="niceRadio" type="radio" name="register"> Register</li>
				    </ul>
				    <p>Register and save time!<br>
				    Register with us for future convenience:</p>
				    <ul>
					<li>Fast and easy check out</li>
					<li>Easy access to your order history and status</li>
				    </ul>
				    <input type="submit" value="Continue" class="btn">
				</form>
				<form class="login">
				    <h3>Login</h3>
				    <p>If you have an account with us, please log in.</p>
							
				    <div class="email">
					<strong>Email Adress:</strong><sup class="surely">*</sup><br>
					<input type="email" name="" class="" value="">
				    </div><!-- .email -->
							
				    <div class="password">
					<strong>Password:</strong><sup class="surely">*</sup><br>
					<input type="text" name="" class="" value="">
				    </div><!-- .password -->
				
				    <div class="remember">
					<input class="niceCheck" type="checkbox" name="Remember_password">
					<span>Remember password</span>
				    </div><!-- .remember -->
				
				    <div class="submit">										
					<input type="submit" value="Login">
                                        <a class="forgot" href="#">Forgot Your Password?</a>
					<sup>*</sup> <span>Required Field</span>
				    </div><!-- .submit -->
				</form>
				<div class="clear"></div>
			    </div>
			</li>
			<li>
			    <a href="#" class="list_header"><div class="number">2</div>Billing Information</a>
			</li>
			<li>
			    <div class="list_header"><div class="number">3</div>Shipping Information</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">4</div>Shipping Method</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">5</div>Payment Information</div>
			</li>
			<li>
			    <div class="list_header"><div class="number">6</div>Order Review</div>
			</li>
		    </ul>
		</article><!-- #checkout_info -->
                
               
                    
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </section><!-- #main -->
    <div class="clear"></div>
</div>
<div class="container">          
    <footer>
        <div class="footer_navigation">
            <div class="container_12">
               
                
                <div class="newsletter-payments">
                    
                    
                    <div class="payments">
                        <img src="images/cafe/payments.png" alt="Payments">
                    </div><!-- .payments -->
                </div><!-- .grid_12.newsletter-payments -->

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_navigation -->

        <div class="footer_info">
            <div class="container_12">

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_info -->
    </footer>
</div>   
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/cafe/jquery.min.js"></script>
    <script src="js/cafe/main.js"></script>
    <script src="js/cafe/checkbox.js"></script>
    <script src="js/cafe/selectBox.js"></script>
    <script src="js/cafe/jquery.carouFredSel-5.2.2-packed.js"></script>
    <script src="js/cafe/jquery.jqzoom-core.js"></script>
    <script src="js/cafe/jquery.transit.js"></script>
    <script src="js/cafe/jquery.easing.1.2.js"></script>
</body>
</html>
