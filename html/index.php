<?php
/**
 * @author zjh
 */
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>THE WONDERFUL</title>

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type='text/javascript' src="js/jquery-2.1.4.min.js"></script>

</head>
<!--head-->


<body style="background-color: #000000;">
<?php include 'header.php';?>	
    <div id="myCarousel" class="carousel slide row col-sm-12">
	
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   

<!-- 轮播（Carousel）指标 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/the wonderful/homepage img1.jpeg" style="height: 850px" alt="First slide">
		</div>
		<div class="item">
			<img src="images/the wonderful/homepage 2.jpg" style="height: 850px" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/the wonderful/homepage 3.jpg" style="height: 850px; align-content: center;" alt="Third slide">
		</div>
	</div>
<!-- 轮播（Carousel）项目 -->
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="next">&rsaquo;</a>
   </div> 
<!-- 轮播（Carousel）导航 -->
 		
<!--part2 navigation-->     
  
       <div id="cafe" class="container" style="background-color: #000000; color: white;text-align: center;">
            
            <h2 class="row col-sm-12" style="font-size: 50px; color: hotpink; font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'; padding-bottom: 40px; padding-top: 40px;"><br>&nbsp; &nbsp;What's on <mark>TODAY's MENU</mark> ?</h2>
            <p class="p1 row col-sm-12" style="font-size: 20px;">&nbsp; &nbsp;⊕ GRAINS [ONE] ---60g White Basmati Rice/ 60g Gluten-Free Potatoes</p>
            <p class="p1 col-sm-12" style="font-size: 20px">&nbsp; &nbsp;⊕ MEAT [ONE] ---1 Salmon Fillet（Lemon sauce)/1 Chicken Fillet（our own sause）</p>
            <p class="p1 row col-sm-12" style="font-size: 20px"> &nbsp; &nbsp;⊕ VEGETABLES [Two]--100g Carrots/100g Broccoli</p>
       <p class="p1 col-sm-12" style="font-size: 20px">&nbsp; &nbsp;⊕ DRINKS [ONE] --- Orange Juice/ Lenom Tea [Optional]  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;＜（￣︶￣）＞ ♡<br></p>
            
       </div>
<!--part3 link to cafe page-->
            
       <div class="container col-sm-12" style="background-color: #B20002; color: white; padding-top: 5px;  padding-bottom: 5px;">
               <h2 class="row col-sm-12" style="color: #FFFFFF; font: 20px Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'; text-align: center;">
               Free UK Delivery<br/>
               Free UK standard delivery<br/> 
               Next day delivery available<br/>
               Need advice, or prefer to order by phone? <br/> 
               call us on <br/>  
               (123) 456-7890&nbsp; <img src="images/the wonderful/WhatsApp-icon.png" height="45px" href="#" title="Facebook"> 
               </h2>   
       </div>
<!--part4 free delivery-->  
<div class="container">
<div class="row col-sm-12">
       <div id="article" class="row featurette col-sm-8" style="background-color: #1D1D1D; list-style-position: inside; float: left;">
            <div class="row featurette">
               <br/><br/><br/><br/><br/>
               <p style="font-size: 51px; color: #CCA9AA; text-align: center"><strong> TOP &nbsp;&nbsp;&nbsp;LIFESTYLES </strong></p>
               <br/><br/>
            </div>
           <?php 
           $mysqli = connect_mysql();
           $sql = "SELECT bf.blog_id, b.article_name,LEFT(b.article_content,200),bi.img_url FROM Blog_follower bf,Blog b,Blog_Img bi WHERE bf.blog_id = b.id AND bi.blog_id = b.id GROUP BY bf.blog_id ORDER BY COUNT(bf.blog_id) DESC, b.date DESC LIMIT 4";
           if ($stmt = $mysqli->prepare($sql)) {
           	$result=$stmt->execute();
           	$stmt->bind_result($blog_id, $article_name,$content,$blog_img_url);
           	while($stmt->fetch()){?>
           	<hr class="featurette-divider">
            <div class="row featurette" style="padding: 20px">
                <div class="col-md-5">
                    <img src="<?php echo $blog_img_url;?>" class="featurette-image img-responsive center-block" alt="lifestyle1">
                </div>
                <div class="col-md-7">
                    <a href="blogpost.php?blog_id=<?php echo $blog_id;?>"><h2 class="featurette-heading"><span class="text-muted"><?php echo $article_name;?></span></h2></a>
                    <p class="lead" style="color:#575757"><?php echo $content;?>...</p>
                </div>
            </div>
           	<?php }
           	$stmt->close();
           }
           
           ?>
            <hr class="featurette-divider">
            <div class="row featurette" style="padding: 20px" >
                  <a class="btn btn-primary btn-large" style="align-content: center; float: right; padding-bottom: 0px;" href="lifestyle.php">Learn more</a><br>           
            </div>
       </div>
<!--part5A lifestyles on homepage-->   

       <div id="aside" class="col-sm-3  col-sm-offset-1" style="background-color: #282828; padding-bottom: 35px; text-align: center; float: right;">	
            <div class="row featurette">
				    <p style="font-size: 45px; color: #CCA9AA; padding-bottom: 30px;" align="center">
					     <br/>TOP<br/> &nbsp;RECIPES <br/>
				    </p>
	        </div>
				
			<?php 
			$mysqli = connect_mysql();
			$sql = "SELECT r.id,r.recipe_name,ri.img_url FROM Recipes r,Recipe_Img ri WHERE r.id=ri.recipe_id LIMIT 4;";
			if ($stmt = $mysqli->prepare($sql)) {
				$result=$stmt->execute();
				$stmt->bind_result($recipe_id, $recipe_name,$recipe_img_url);
				while($stmt->fetch()){?>
			       <div class="row featurette"  style="padding: 20px">
                    <img src="<?php echo $recipe_img_url;?>" height="250px" width="250px" href="#" title="smoky beans on toast">
                    <a href="recipes.php#recipe_<?php echo $recipe_id;?>"><p  align="center" title="smoky beans on toast" style="color:#808080"><?php echo $recipe_name;?></p></a>
            	   </div>
            	   <hr class="featurette-divider">	
			           	<?php }
			           	$stmt->close();
			           }
			
			?>                          
            <div class="row" style="padding: 20px">
                  <a class="btn btn-primary btn-large" style="align-content: center; float: right;" href="recipes.php">Learn more</a>
                            
            </div>
	   </div>
</div>
</div>
<!--part5B recipes on homepage & Ad.-->                           
                           
<div class="container">
<div id="about" class="row col-sm-12 " style="background-color:#000000 ">

	<p class="p3 row text-center " ">
		<img src="images/the wonderful/logo2.png" height="180px" width="400px" ><br/><strong>"The Wonderful"</strong> is an online chatting community for people who want to loss weight. It is a good pleca for them to share tasty low calories meals, healthy lifestyles, or their successful diet experience to encourage others on our web. Besides, THE WONDERFUL also provides take-out service. Giving people a chance to choose their own healthy meals online, and the tasty food would be delivered from the nearest "the wonderful cafe " just in minutes.
	</p>
    
	<p class="p2 row">
		<hr><img src="images/the wonderful/user-2-icon.png" height="200px" width="200px"><strong>YIZI WANG</strong>
	</p>
	
	<p class="p2 row">
		<hr><img src="images/the wonderful/user-2-icon.png" height="200px" width="200px"><strong>BINGYUN DAI</strong>
	</p>
	
	<p class="p2 row">
		<hr><img src="images/the wonderful/user-2-icon.png" height="200px" width="200px"><strong>JIEHUA ZENG</strong>
	</p>
</div>
</div>
<!--part6 ABOUT on homepage-->
<div class="container">
<footer id="contact" class="footer section row col-sm-12">

				<div class="container row col-sm-12">
					<h1 class="title text-center" style="color: #D5D5D5; padding-bottom: 20px">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6" style="padding: 30px">
							<div class="footer-content">
								<p class="large" style="color: #BEBEBE;padding: 10px;"><b> &nbsp; &nbsp; &nbsp; Messages are welcoming in "The Wonderful". Just e-mail here, and we will reply soon ! </b> </p>
								<ul class="list-icons" style="color: #BEBEBE">
									<li><i class="fa fa-map-marker pr-10"></i>  &nbsp;9D Holyrood Road , 1st Floor, Edinburgh , EH8 8FQ</li>
								</ul>
								<ul class="list-icons" style="color: #BEBEBE">
									<li><i class="fa fa-phone pr-10"></i> &nbsp; FREE ORDER CALL : (123) 456-7890  </li>
								</ul>		
								<ul class="list-icons" style="color: #BEBEBE">
									<li><i class="fa fa-fax pr-10"></i> &nbsp; +00 1234567891 (Mon-Fri 9.00am - 5.00pm)</li>
								</ul>		
								<ul class="list-icons" style="color: #BEBEBE">
									<li><i class="fa fa-envelope-o pr-10"></i> &nbsp; wangyizi2016@163.com</li>
								</ul>	
								<ul  class="social-links  " style="padding: 10px">
									<li class="facebook contact_li"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter contact_li"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus contact_li"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype contact_li"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin contact_li"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube contact_li"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr contact_li"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest contact_li"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6" style="padding: 30px">
							<div class="footer-content">
								<form role="form" id="footer-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default" name="feedback_sub" >
								</form>
							</div>
						</div>
					</div>
				</div>
<?php 
if(isset($_POST['feedback_sub'])){
	$name = filter_var($_POST['name2'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email2'], FILTER_SANITIZE_STRING);
	$message = filter_var($_POST['message2'], FILTER_SANITIZE_STRING);
	$to = "wangyizi2016@163.com";         // 邮件接收者
	$subject = "FEEDBACK";                // 邮件标题
	$from = $email;   // 邮件发送者
	$headers = "From:" . $from;         // 头部信息设置
	mail($to,$subject,$message,$headers);
}

?>
 <!--part7 HELP/CONTACT on homepage & Ad.-->

	  
<div class="row footer col-md-12 column">		
                        <hr>		
                        <div class="row col-sm-12">
                            <p style="text-align: center; background-color: #000000; font-size: 15px;"> Copyright &copy;2016-2017DDM The Wondeful Team All Rights Reserved.</p >
                        </div>
</div>
</footer>
</div>
<!--part8 footer--> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
