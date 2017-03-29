<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

<!--     <link rel="stylesheet" href="css/cafe/grid.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cafe/style.css">
<!--     <link rel="stylesheet" href="css/cafe/normalize.css"> -->
    
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">	
    <script src="js/jquery-2.1.4.min.js"></script>

</head>
<body>
<?php include 'header.php';?>
<div class="container">
    <div id="cafe">
            <h2>&nbsp; &nbsp;What's on <mark>TODAY's MENU</mark> ?</h2>
            <p class="p1" >&nbsp;⊕ GRAINS [ONE] ---60g White Basmati Rice/ 60g Gluten-Free Potatoes</p >
            <p class="p1" >&nbsp; &nbsp; &nbsp; &nbsp;⊕ MEAT [ONE] ---1 Salmon Fillet（Lemon sauce)/1 Chicken Fillet（our own sause）</p >
            <p class="p1" >⊕ VEGETABLES [Two]--100g Carrots/100g Broccoli</p >
            <p class="p1" >&nbsp; &nbsp;⊕ DRINKS [ONE] --- Orange Juice/ Lenom Tea [Optional]  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span id="quick_order"><a href="javascript:;"><img alt="" src="images/cafe/shopping_cart.png" title="Click to Buy All ">Click Buy ALL</a></span></p >           
   </div>
   <?php 
   if(isset($_SESSION['userID'])){?>
   	<script type="text/javascript">
		$('#quick_order').click(function(){
			var user_id = "<?php echo $_SESSION['userID'];?>";
			for(var i=0;i<4;i++){
				
				//var food_id = $(this).find("img").attr("name");
				var food_id = 2*(i+1);
				$.ajax({
			 			type : "POST",
				 		url : "order.php",
				 		async: false,
				 		//contentType: "application/json; charset=utf-8",     
				 		dataType: "json",
				 		data : {
					 		food_id : food_id,
					 		user_id : user_id,
					 		add_food : true
					 		//quantity : quantity,
					 		//update : "true"
				 		},
				 		success: function(returndata){
			 				var total_p = returndata[0]['total_price'];
			 				$('.total_price').text(total_p.toFixed(2));
			 				var order_list = returndata[1];
							//total_p = total_p+parseFloat(price);
							$('#food_list').empty();
							for(var i=0;i<order_list.length;i++){
								$('#food_list').append('<li id="'+order_list[i]['li_id']+'"><a  class="prev_cart"><div class="cart_vert"><img src="'+order_list[i]['img_url']+'"></div></a><div class="cont_cart"><h4>'+order_list[i]['food_name']+'</h4><div class="price"><span class="qantity">'+order_list[i]['quantity']+'</span> x <span>£ '+order_list[i]['price']+'</span></div></div></li>');
							}
									
					 	},
					 	error: function(err) {     
			                alert("Error");     
			            }     
				 	});			
			}
			alert("Excited!");
		});
   	</script>
   <?php }else{?>
   	<script type="text/javascript">
   		$('#quick_order').click(function(){
   	   		alert("Please Login");
   		});
   	</script>
   <?php }
   ?>

   <div class="shopping_cart row">
                       <ul id="cart_nav">
                        <li>
                            <a class="cart_li" >
                                <div class="cart_ico"></div>
                                Cart
                                £<span class="total_price">0.0</span>
                            </a>
                            <ul class="cart_cont">
                                <li  class="no_border recently">Recently added item(s)</li>
                                <div id="food_list">
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
								</div>
                                <li id ="check_part" class="no_border">
                                    <a href="shopping_cart.php" class="view_cart">View shopping cart</a>
                                    <a href="checkout.php" class="checkout">Procced to Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->
   </div>
   <div class="products row">
   <?php 
   $mysqli = connect_mysql();
   $sql = "SELECT id FROM Food_Category;";
   if ($stmt = $mysqli->prepare($sql)) {
   	$stmt->execute();
   	$stmt->bind_result($fc_id);
   	while($stmt->fetch()){?>
   		<div class="col-md-3">
       	<?php 
       	$mysqli = connect_mysql();
       	$sql = "SELECT f.id,f.food_name,f.price,f.img_url,fc.category FROM Food f,Food_Category fc WHERE fc.id=? AND fc.id=f.category_id;";
       	if ($stmt2 = $mysqli->prepare($sql)) {
       		$stmt2->bind_param("i", $fc_id);
       		$stmt2->execute();
       		$stmt2->bind_result($food_id,$food_name,$price,$img_url,$food_cate);
       		$title = 1;
       		while($stmt2->fetch()){?>
       			<article class="article">
       			<?php 
       			if($title==1){ ?>
       				<h2 class="product-title"><?php echo $food_cate;?></h2>
       			<?php 
       			$title=0;
       			}?>
       			<div class="prev">                     
                    <img class="img-responsive" src="<?php echo $img_url;?>" alt="Product 1" title="">
                </div><!-- .prev -->
                <h3 class="title"><?php echo $food_name;?></h3>
                <div class="cart">
                  <div class="price">
                      <div class="vert">
                         £<span class="food_price"><?php echo $price;?></span>                            
                      </div>
                  </div>
                  <a href="javascript:;" class="bay buy_food"><img src="images/cafe/bg_cart.png" alt="Buy" name="<?php echo $food_id;?>" title=""></a>
                  <?php 
                  if(isset($_SESSION['userID'])){?>
                  	<script type="text/javascript">
					$('.buy_food').unbind('click').click(function(){
						var user_id = "<?php echo $_SESSION['userID'];?>";
						var food_id = $(this).find("img").attr("name");
						$.ajax({
					 			type : "POST",
						 		url : "order.php",
						 		async: false,
						 		//contentType: "application/json; charset=utf-8",     
						 		dataType: "json",
						 		data : {
							 		food_id : food_id,
							 		user_id : user_id,
							 		add_food : true
							 		//quantity : quantity,
							 		//update : "true"
						 		},
						 		success: function(returndata){
					 				var total_p = returndata[0]['total_price'];
					 				$('.total_price').text(total_p.toFixed(2));
					 				var order_list = returndata[1];
									//total_p = total_p+parseFloat(price);
									$('#food_list').empty();
									for(var i=0;i<order_list.length;i++){
										$('#food_list').append('<li id="'+order_list[i]['li_id']+'"><a  class="prev_cart"><div class="cart_vert"><img src="'+order_list[i]['img_url']+'"></div></a><div class="cont_cart"><h4>'+order_list[i]['food_name']+'</h4><div class="price"><span class="qantity">'+order_list[i]['quantity']+'</span> x <span>£ '+order_list[i]['price']+'</span></div></div></li>');
									}
									alert("Excited!");		
							 	},
							 	error: function(err) {     
					                alert("Error");     
					            }     
						 	});									
					
				});
                  </script>
                  <?php }else{?>
                  	<script type="text/javascript">
                  	$('.buy_food').unbind('click').click(function(){
						alert("Please Login");

                      	});
                  	</script>
                  <?php }
                  ?>

                </div><!-- .cart -->
                </article><!-- .article -->
       		<?php }       			
       		$stmt2->close();
       	}
       	?>
    	</div>
   	<?php }
   	$stmt->close();
   }
   ?>
   </div>
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
