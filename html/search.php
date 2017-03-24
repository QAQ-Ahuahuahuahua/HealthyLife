<?php
include 'config.php';
if(isset($_POST['recipe_keyword'])){
	$keyword = $_POST['recipe_keyword'];
	//$keyword = "stir";
	$mysqli = connect_mysql();
	$sql = "SELECT recipe_name FROM Recipes Where recipe_name LIKE ? OR content LIKE ?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("ss", $keyword,$keyword);
		$keyword='%'.$keyword.'%';
		$stmt->execute();
		$stmt->bind_result($recipe_name);
		$recipes=array();
		while($stmt->fetch()){
			//$recipe=array('name'=>$recipe_name);
			$recipes[]=$recipe_name;
		}
		$stmt->close();
	}
	$mysqli->close();
	echo json_encode($recipes);
}
if(isset($_POST['blog_keyword'])){
	$keyword = $_POST['blog_keyword'];
	//$keyword = "stir";
	$mysqli = connect_mysql();
	$sql = "SELECT article_name FROM Blog Where article_name LIKE ? OR article_content LIKE ?;";
	if ($stmt = $mysqli->prepare($sql)) {
		$stmt->bind_param("ss", $keyword,$keyword);
		$keyword='%'.$keyword.'%';
		$stmt->execute();
		$stmt->bind_result($article_name);
		$articles=array();
		while($stmt->fetch()){
			//$recipe=array('name'=>$recipe_name);
			$articles[]=$article_name;
		}
		$stmt->close();
	}
	$mysqli->close();
	echo json_encode($articles);
}
?>