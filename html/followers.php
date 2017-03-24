<?php
include 'config.php';
	if(isset($_POST['follower'])){
		$blog_id = $_POST['blog_id'];
		$user_id = $_POST['user_id'];
		//echo $blog_id;
		echo $user_id;
		$mysqli = connect_mysql();
		$sql = "INSERT INTO Blog_follower(blog_id,user_id) VALUES(?,?)";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("ii", $blog_id,$user_id);
			$stmt->execute();
			$stmt->close();
		}
		$mysqli->close();
	}
	
	if(isset($_POST['comment'])){
		$blog_id = $_POST['blog_id'];
		$user_id = $_POST['user_id'];
		$comment = $_POST['comment'];
		$com_time = $_POST['com_time'];
		$mysqli = connect_mysql();
		$sql = "INSERT INTO Comment(user_id,blog_id,comment,date) VALUES(?,?,?,?);";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("iiss",$user_id,$blog_id,$comment,$com_time);
			$stmt->execute();
			$stmt->close();
		}
		$sql = "SELECT COUNT(id) FROM Comment WHERE blog_id=? GROUP BY blog_id;";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("i",$blog_id);
			$stmt->execute();
			$stmt->bind_result($com_num);
			$stmt->fetch();
			$stmt->close();
		}
		$sql = "SELECT c.comment,u.username,c.date,u.profile_img FROM Comment c,User u WHERE c.blog_id=? AND c.user_id=u.id ORDER BY c.date DESC LIMIT 3";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("i", $blog_id);
			$stmt->execute();
			$stmt->bind_result($comments, $com_user,$com_date,$profile_img);
			//floor
			$floor = $com_num;
			$com_result = array();
			while($stmt->fetch()){
				$com_time = date("M d, Y  h:i A",strtotime($com_date));
				$row_array = array('profile_img'=>$profile_img,'com_user'=>$com_user,'comments'=>$comments,'com_time'=>$com_time);
				$com_result[]=$row_array;
			}
			$stmt->close();
		}
		$result = array();
		$result[] = array('com_num'=>$com_num);
		$result[]=$com_result;
		
		echo json_encode($result);
	}
	
	if(isset($_POST['next_page'])){
		$nextPage = $_POST['next_page'];
		$blog_id = $_POST['blog_id'];
		$perPage = $_POST['perPage'];
		$mysqli = connect_mysql();
		$sql = "SELECT COUNT(id) FROM Comment WHERE blog_id=? GROUP BY blog_id;";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("i",$blog_id);
			$stmt->execute();
			$stmt->bind_result($com_num);
			$stmt->fetch();
			$stmt->close();
		}
		$sql = "SELECT c.comment,u.username,c.date,u.profile_img FROM Comment c,User u WHERE c.blog_id=? AND c.user_id=u.id ORDER BY c.date DESC LIMIT ?,?;";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("iii", $blog_id,$nextPage,$perPage);
			$nextPage = ($nextPage-1)*$perPage;
			$stmt->execute();
			$stmt->bind_result($comments, $com_user,$com_date,$profile_img);
			//floor
			$floor = $com_num;
			$com_result = array();
			while($stmt->fetch()){
				$com_time = date("M d, Y  h:i A",strtotime($com_date));
				$row_array = array('profile_img'=>$profile_img,'com_user'=>$com_user,'comments'=>$comments,'com_time'=>$com_time);
				$com_result[]=$row_array;
			}
			$stmt->close();
		}
		$result = array();
		$result[] = array('com_num'=>$com_num);
		$result[]=$com_result;
		
		echo json_encode($result);
		//$mysqli->close();
	}

?>