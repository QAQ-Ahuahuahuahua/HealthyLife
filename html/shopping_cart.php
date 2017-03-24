<?php
/*
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Shoping cart</title>
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--     <link rel="stylesheet" href="css/cafe/grid.css"> -->
    <link rel="stylesheet" href="css/cafe/style.css">
    <link rel="stylesheet" href="css/cafe/normalize.css">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">	
    <script src="js/jquery-2.1.4.min.js"></script>


</head>
<body>
<?php include 'header.php';?>
    <div class="container" id="shopping_table">
                <header>
                    <h1 class="page_title">Shopping cart</h1>
                </header>
                    
                <article>
                    <table class="cart_product table">
                        <tr class="bg">
                            <th class=""></th>
                            <th class="">Product Name</th>
                            <th class="">Order ID</th>
                            <th class="">Unit Price</th>
                            <th class="">Qty</th>
                            <th class="">Subtotal</th>
                            <th class=""> </th>
                        </tr>
                        <?php 
                        if(isset($_SESSION['userID'])){
                        	$user_id = $_SESSION['userID'];
                        	$mysqli = connect_mysql();
                        	$sql = "SELECT f.img_url,f.food_name,f.price,sc.order_id,sc.quantity FROM Food f,Shopping_cart sc WHERE f.id=sc.food_id AND sc.user_id=?;";
                        	$total_price=0.0;
                        	$qtys = array();
                        	if ($stmt = $mysqli->prepare($sql)) {
                        		$stmt->bind_param("i", $user_id);
                        		$stmt->execute();
                        		$stmt->bind_result($o_img_url,$o_food_name,$o_price,$order_id,$quantity);
                        		while($stmt->fetch()){?>
                        	                        <tr id="<?php echo $order_id;?>">
                        	                            <td class="images"><a><img src="<?php echo $o_img_url;?>" class="img-rounded img-responsive" alt="Product 12" title=""></a></td>
                        	                            <td class="name"><?php echo $o_food_name;?></td>
                        	                            <td class="order"><?php echo $order_id;?></td>
                        	                            <td class="price">£<span class="per_price"><?php echo $o_price;?></span></td>
                        	                            <td class="qty"><input class="qty_input" type="text" name="" value="<?php echo $quantity;?>"></td>
                        	                            <td class="subtotal">£<span class="sub_total"><?php echo $o_price*$quantity;?></span></td>
                        	                            <td class=""><a title="close" class="close" href="javascript:;"></a></td>
                        	                        </tr>
                        	
                        	                        	<?php                         	
                        	                        	$total_price=$o_price*$quantity+$total_price;
                        	                         	$qtys[$order_id]=$quantity; 
                        	                      
                        	                         	}
                        	                        	$stmt->close();
                        	                        }      
                        }
                                          
                         ?>
                        <tr>
                            <td colspan="7" class="cart_but">
                                <a href="cafe.php" class="continue"><img src="images/cafe/cont.png" alt="" title=""> Continue Shopping</a>
                                <?php if(isset($_SESSION['userID'])){ ?>
                                <a href="javascript:;" class="update" id="update_pro"><img src="images/cafe/update.png" alt="" title=""> Update Shopping Cart</a>
                                <?php }?>
                                
                            </td>
                        </tr>
                    </table>
                    <script type="text/javascript">
                    var qtys = eval(<?php echo json_encode($qtys);?>);
						$('#update_pro').click(function(){							
							var total_p=parseFloat($('span.bottom_price_grand').text());
							$('.qty_input').each(function(){
								var quantity = $(this).attr('value');
								var order_id = $(this).parent().parent().find('.order').text();
								var price = $(this).parent().parent().find('span.per_price').text();
								var pre_qty = qtys[order_id];
								var subprice;
								if(quantity!=pre_qty){
							 		$.ajax({
							 			type : "POST",
								 		url : "order.php",
								 		async: false,
								 		//contentType: "application/json; charset=utf-8",     
								 		//dataType: "json",
								 		data : {
									 		order_id : order_id,
									 		quantity : quantity,
									 		update_by_order : "true"
								 		},
								 		success: function(){
								 			
											total_p = total_p+parseFloat(price)*(quantity-pre_qty);
												
									 	},
									 	error: function(err) {     
							                alert("Error");     
							            }     
								 	});
							 		subprice = quantity*price;
							 		$(this).parent().parent().find('span.sub_total').text(subprice);
							 		qtys[order_id]= quantity;		
								}
							});
							$('.bottom_price').text(total_p);
							alert("Success!");	
						});
						$('.close').click(function(){
							var order_id = $(this).parent().parent().attr('id');
							$.ajax({
					 			type : "POST",
						 		url : "order.php",
						 		async: false,
						 		//contentType: "application/json; charset=utf-8",     
						 		//dataType: "json",
						 		data : {
							 		order_id : order_id,
							 		delete_by_order : "true"
						 		},
						 		success: function(){
									$('#'+order_id).remove();
							 	},
							 	error: function(err) {     
					                alert("Error");     
					            }     
						 	});
	
						});

                    </script>
                    

                    <div class="clear"></div>
				</article>
                 
                <div class="clear"></div>

            <div class="clear"></div>
    </div>
    
    <div class="container">
                        <div id="cart_forms">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="bottom_block estimate">
                                <h3>Shipping</h3>
                                <p>Enter your destination.</p>
                                <form>
                                    <p>
                                        <strong>Country:</strong><sup>*</sup><br>
                                        <select>
                                            <option>United States</option>
                                            <option>United States</option>
                                        </select>
                                    </p>
                                    <p>
                                        <strong>State/Province:</strong><br>
                                        <select class="bottom-index">
                                            <option>Please select region, state or province</option>
                                            <option>Please select region, state or province</option>
                                        </select>
                                    </p>
                                    <p>
                                        <strong>Zip/Postal Code</strong><br>
                                        <input type="text" name="" value="">
                                    </p>
                                    <input type="submit" id="get_estimate" value="Submit">
                                </form>

                            </div><!-- .estimate -->
                        </div><!-- .grid_4 -->

                        <div class="col-md-4">
                            <div class="bottom_block discount">
                                <h3>Discount Codes</h3>
                                <p>Enter your coupon code if you have one.</p>
                                <form>
                                    <p><input type="text" name="" value=""></p>
                                    <input type="submit" id="apply_coupon" value="Apply Coupon">
                                </form>
                            </div><!-- .discount -->
                        </div><!-- .grid_4 -->

                        <div class="col-md-4">
                            <div class="bottom_block total">
                            <div class="row">
                                <table class="subtotal">
                                <?php 
                                if(isset($_SESSION['userID'])){?>
                                	<tr>
                                        <td>Subtotal</td><td class="price">£<span class="bottom_price"><?php echo $total_price;?></span></td>
                                    </tr>
                                    <tr class="grand_total">
                                        <td>Grand Total</td><td class="price">£<span class="bottom_price_grand bottom_price"><?php echo $total_price;?></span></td>
                                    </tr>
                                <?php }else{?>
                                	<tr>
                                        <td>Subtotal</td><td class="price">£<span class="bottom_price">0.0</span></td>
                                    </tr>
                                    <tr class="grand_total">
                                        <td>Grand Total</td><td class="price">£<span class="bottom_price_grand bottom_price">0.0</span></td>
                                    </tr>
                                <?php }
                                ?>
                                    
                                </table>
                             </div>
                             <div class="row">
                             <a href="checkout.php">
                             <button class="checkout">PROCEED TO CHECKOUT <img src="images/cafe/checkout.png" alt="" title=""></button>
                             </a>
                             </div>
                             <div class="row">Checkout with Multiple Addresses</div>
                                
                            </div><!-- .total -->
                        </div><!-- .grid_4 -->
                    </div>
                        <div class="clear"></div>
                    </div><!-- #cart_forms -->
    </div>
    <div class="clear"></div>
    
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
