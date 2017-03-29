<?php
include 'config.php';

if(isset($_POST['add_food'])){
	$food_id = $_POST['food_id'];
	$user_id = $_POST['user_id'];
	$dataB = array();
	$mysqli = connect_mysql();
	$sql = "SELECT id,quantity FROM Shopping_cart WHERE food_id=? AND user_id=?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("ii", $food_id,$user_id);
		$stmt->execute();
		$stmt->bind_result($shopping_id,$qty);
		$stmt->fetch();		
		$stmt->close();
	}
	if(!empty($shopping_id)){
		$qty++;
		$sql = "UPDATE Shopping_cart SET quantity=? WHERE food_id=? AND user_id=?;";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("iii", $qty,$food_id,$user_id);
			$stmt->execute();
			//$dataB[]=array('new'=>'false');
			$stmt->close();
		}		
	}else{
		$quantity = 1;
		$order_id = time().$user_id;
		$mysqli = connect_mysql();
		$sql = "INSERT INTO Shopping_cart(food_id,user_id,quantity,order_id) VALUES(?,?,?,?);";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("iiis", $food_id,$user_id,$quantity,$order_id);
			$stmt->execute();
			//$dataB[]=array('new'=>'true');
			$stmt->close();
		}
	}
	$sql = "SELECT f.img_url,f.food_name,f.price,sc.food_id,sc.quantity FROM Food f,Shopping_cart sc WHERE f.id=sc.food_id AND sc.user_id=?;";
	$total_price=0.0;
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("i", $user_id);
		$stmt->execute();
		$stmt->bind_result($o_img_url,$o_food_name,$o_price,$o_food_id,$o_quantity);
		while($stmt->fetch()){
			$orders[]=array('li_id'=>$o_food_id.$user_id,'img_url'=>$o_img_url,'food_name'=>$o_food_name,'price'=>$o_price,'quantity'=>$o_quantity);
			$total_price=$o_price*$o_quantity+$total_price;
		}
		$stmt->close();
	}
	
	$dataB[] = array('total_price'=>$total_price);
	$dataB[]=$orders;
	echo json_encode($dataB);
	$mysqli->close();
}

if(isset($_POST['update_by_order'])){
	$order_id = $_POST['order_id'];
	$quantity = $_POST['quantity'];
	$mysqli = connect_mysql();
	$sql = "UPDATE Shopping_cart SET quantity=? WHERE order_id=?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("is", $quantity,$order_id);
		$stmt->execute();
		$stmt->close();
	}
	$mysqli->close();
}
if(isset($_POST['delete_by_order'])){
	$order_id = $_POST['order_id'];
	$mysqli = connect_mysql();
	$sql = "DELETE FROM Shopping_cart WHERE order_id=?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("s", $order_id);
		$stmt->execute();
		$stmt->close();
	}
	$mysqli->close();
}
?>