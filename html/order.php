<?php
include 'config.php';

if(isset($_POST['new_order'])){
	$food_id = $_POST['food_id'];
	$user_id = $_POST['user_id'];
	$quantity = $_POST['quantity'];
	$order_id = time().$user_id;
	$mysqli = connect_mysql();
	$sql = "INSERT INTO Shopping_cart(food_id,user_id,quantity,order_id) VALUES(?,?,?,?);";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("iiis", $food_id,$user_id,$quantity,$order_id);
		$stmt->execute();
		$stmt->close();
	}
	$mysqli->close();
	echo $food_id.$user_id;
}

if(isset($_POST['update'])){
	$food_id = $_POST['food_id'];
	$user_id = $_POST['user_id'];
	$quantity = $_POST['quantity'];
	$mysqli = connect_mysql();
	$sql = "UPDATE Shopping_cart SET quantity=? WHERE food_id=? AND user_id=?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("iii", $quantity,$food_id,$user_id);
		$stmt->execute();
		$stmt->close();
	}
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