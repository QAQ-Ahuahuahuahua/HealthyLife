<?php
/**
 * @author zjh
 */
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
		<meta name="description" content="Enter there short description of your site" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/blog/style1.css" />
		<script type='text/javascript' src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>

	<?php include 'header.php';?>
	<div class="container blog_content">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 left">
			<div class="row blog">
				<div class="post-wrap">
				<?php 
				$blog_id = filter_var($_GET['blog_id'], FILTER_SANITIZE_STRING);
				$mysqli = connect_mysql();
				$sql = "SELECT b.article_name,b.article_content,b.date,b.author,b.category,bc.category,u.first_name,u.last_name,bi.img_url,COUNT(c.blog_id) FROM Blog b LEFT JOIN Comment c ON b.id=c.blog_id,Blog_category bc,User u,Blog_Img bi WHERE b.category=bc.id AND b.author=u.id AND b.id=bi.blog_id AND b.id=?";
				if ($stmt = $mysqli->prepare($sql)) {
					$stmt->bind_param("i", $blog_id);
					$stmt->execute();
					$stmt->bind_result($article_name,$article_content,$date,$author,$cate_id,$category,$first_name,$last_name,$img_url,$com_num);
					$stmt->fetch();
					
					//time
					$time = strtotime($date);
					$year = date("Y",$time);
					$mon = date("M",$time);
					$day = date("d",$time);
					echo "<div class=\"post-date\"><span class=\"day\">$day</span> <span class=\"month\">$mon</span> <span class=\"year\">$year</span></div>					
							<div class=\"post-header\">$article_name</div>
							<div class=\"post-info-wrap\">POST BY: <span class=\"author-name\">$first_name $last_name</span> in <a href=\"lifestyle.php?category=$cate_id\">$category</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href=\"#comments-count\" class=\"scroll\" id=\"t_com_num\">Comments: $com_num</a></div>
							<img src=\"$img_url\" class=\"img-thumbnail img-responsive\" alt=\"Enter here a description of pictures\" />
							<div class=\"post-descr\"><p>$article_content</p></div>";
					$stmt->close();
				}				
				?>
				</div>
			 </div>
			 <div class="row comment">
			 <div  id="comments-count" class="row">
			 	<div class="col-md-10" id="com_com_num">
			 		<?php echo "$com_num Comments";?>	
			 	</div>
			 	<div class="col-md-2" id="follower">
			 	<?php 				
			 	$mysqli = connect_mysql();
				$sql = "SELECT COUNT(user_id) FROM Blog_follower WHERE blog_id=?";
				if ($stmt = $mysqli->prepare($sql)) {
					$stmt->bind_param("i", $blog_id);
					$stmt->execute();
					$stmt->bind_result($followers);
					$stmt->fetch();
					$stmt->close();
					echo $followers.' ';
				}
				if(isset($_SESSION['userID'])){
					$user_id = $_SESSION['userID'];
					$mysqli = connect_mysql();
					$sql = "SELECT id FROM Blog_follower WHERE blog_id=? and user_id=?";
					if ($stmt = $mysqli->prepare($sql)) {
						$stmt->bind_param("ii", $blog_id,$user_id);
						$stmt->execute();
						$stmt->bind_result($id);
						$stmt->fetch();
						if($id==null){?>
						<span id="thumb_up"><a href="javascript:;"><i class="fa fa-thumbs-o-up fa-4x" aria-hidden="true" ></i></a></span>
						<?php }else {?>
				 		<i class="fa fa-thumbs-o-up fa-4x" aria-hidden="true" id="thumb-up" style="color : yellow"></i>
						<?php }
						$stmt->close();
					}
				}else{?>
				 	<i class="fa fa-thumbs-o-up fa-4x" aria-hidden="true" id="thumb-up" style="color : yellow"></i>
				<?php }		?>
				</div>
			 </div>
			 <script type="text/javascript">

			 	$('#thumb_up').click(function(){
			 		
 				 		var num = parseInt($('#follower').text()); 				 		
				 		var blog_id = "<?php echo $blog_id;?>";
				 		var user_id = "<?php echo $_SESSION['userID'];?>";
				 		$.ajax({
				 			type : "POST",
					 		url : "followers.php",
					 		async: false,
					 		data : {
						 		blog_id : blog_id,
						 		user_id : user_id,
						 		follower : "true"
					 		},
					 		success: function(returndata){
					 			num ++;								
								$('#follower').html(num+' '+'<i class="fa fa-thumbs-o-up fa-4x" aria-hidden="true" id="thumb-up" style="color : yellow"></i>');
						 	},
						 	error: function(err) {     
				                alert("Error");     
				            }     
					 	});						
						
				 	});
			 </script>	 
			 	 	
			 	<div id="comment-section">
					<div class="comment-wrap" id="comment_wrap">
					<?php 
					$sql = "SELECT c.comment,u.username,c.date,u.profile_img FROM Comment c,User u WHERE c.blog_id=? AND c.user_id=u.id ORDER BY c.date DESC LIMIT 3;";
					if ($stmt = $mysqli->prepare($sql)) {
						$stmt->bind_param("i", $blog_id);
						$stmt->execute();
						$stmt->bind_result($comments, $com_user,$com_date,$profile_img);
						//floor
						$floor = $com_num;
						$page = 1;
						while($stmt->fetch()){
							$com_time = date("M d, Y  h:i A",strtotime($com_date));?>
							<div class="row">
							 	<div class="avatar-wrap" >
									<img src=<?php echo $profile_img;?> alt="" />
								</div>
								<div class="comment-text-wrap">
									<div class="comment-title"><?php echo $com_user;?> &nbsp;&nbsp;<span class="post-number">#<?php echo $floor;?></span></div>
									<div class="comment-text"><?php echo $comments;?>
										<div class="date-reply-wrap">
											<div class="date-time"><?php echo $com_time;?></div>
										</div>
									</div>
								</div>
							</div>
							<?php $floor--;
						}
						$stmt->close();
					}
					$mysqli->close();
					
					?>								
					</div>
					
					<ul class="pager">
   	 					<li class="previous" id="page_previous" value="<?php echo $page-1;?>"><a href="javascript:;">&larr; Older</a></li>
    					<li class="next" id="page_next" value="<?php echo $page+1;?>"><a href="javascript:;">Newer &rarr;</a></li>
					</ul>
					<script type="text/javascript">
						var perPage = 3;
						var totalCom = "<?php echo $com_num;?>";
 						var maxPages = Math.ceil(totalCom/perPage);

						if($('#page_previous').attr('value')<1){
							$('#page_previous').attr("class","previous disabled");
						}else{
							$('#page_previous').attr("class","previous");
						}
						if($('#page_next').attr('value')>maxPages){
							$('#page_next').attr("class","next disabled");
						}else{
							$('#page_next').attr("class","next");
						}
 						
						function ToNextPage(nextPage){
							var blog_id = "<?php echo $blog_id;?>";
							var nextPage = nextPage;
							$.ajax({
					 			type : "POST",
						 		url : "followers.php",
						 		async: false,
						 		//contentType: "application/json; charset=utf-8",     
						 		dataType: "json",
						 		data : {
							 		blog_id : blog_id,
							 		next_page : nextPage,
							 		perPage : perPage
						 		},
						 		success: function(returndata){

									var com_num = returndata[0]['com_num'];
									$('#t_com_num').text('Comments: '+com_num);
									$('#com_com_num').text(com_num+' Comments');
									var com_result = returndata[1];
									$('#comment_wrap').empty();
									var floor = com_num-perPage*(nextPage-1);
									for(var i=0;i<com_result.length;i++){
										$('#comment_wrap').append('<div class=avatar-wrap><img src="'+com_result[i]['profile_img']+'" alt="" /></div>');
										$('#comment_wrap').append('<div class="comment-text-wrap"><div class="comment-title">'+com_result[i]['com_user']+' &nbsp;&nbsp;<span class="post-number">#'+floor +'</span></div><div class="comment-text">'+com_result[i]['comments']+'<div class="date-reply-wrap"><div class="date-time">'+com_result[i]['com_time']+'</div></div></div></div>');
										floor--;
									}
									$('#comment').val("");
									if(nextPage-1<1){
										$('#page_previous').attr("class","previous disabled");
										$('#page_previous').attr("value",nextPage-1);
										$('#page_next').attr("class","next");
										$('#page_next').attr("value",IntParse(nextPage)+1);
																
									}else{
										$('#page_previous').attr("class","previous");
										$('#page_previous').attr("value",nextPage-1);
									}
									if(nextPage+1>maxPages){
										$('#page_next').attr("class","next disabled");
										$('#page_next').attr("value",IntParse(nextPage)+1);
										$('#page_previous').attr("class","previous");
										$('#page_previous').attr("value",nextPage-1);
									}else{
										$('#page_next').attr("class","next");
										$('#page_next').attr("value",IntParse(nextPage)+1);
									}														
							 	},
							 	error: function(err) {     
					                alert("Error");     
					            }     
						 	});
						 	location.href = "<?php echo $_SERVER['REQUEST_URI'];?>"+'#comments-count';
						}					
						$('#page_next').click(function(){
							var nextPage = $(this).attr('value');							
							ToNextPage(nextPage);													 
						});
						$('#page_previous').click(function(){
							var nextPage = $(this).attr('value');							
							ToNextPage(nextPage);													 
						});
						
					</script>
					
				</div>
			 </div>
			 <?php if(isset($_SESSION['user'])){?>
			 <div class="row leave_comment">
			 		<div id="comment-post-section">
					<h1 class="header1 text-left">Leave a Comment</h1>
					<form role="form" action="javascript:;" method="post">
						<div>Your Message <span class="asterisk">*</span></div>
						<textarea class="form-control" name="comment" id="comment"></textarea><br />
						<input type="submit" value="submit" id="send_button" class="btn btn-info" name="com_sub"/>
					</form>
				</div>
			 </div>
			 <?php }?>
			 <script type="text/javascript">
			 $('#send_button').click(function(){
				    var blog_id = "<?php echo $blog_id;?>";
			 		var user_id = "<?php echo $_SESSION['userID'];?>";
			 		var comment = $('#comment').val();
			 		var com_time = "<?php echo date('Y-m-d H:i:s');?>";
			 		var floor = "<?php echo $floor;?>";
			 		$.ajax({
			 			type : "POST",
				 		url : "followers.php",
				 		async: false,
				 		//contentType: "application/json; charset=utf-8",     
				 		dataType: "json",
				 		data : {
					 		blog_id : blog_id,
					 		user_id : user_id,
					 		comment : comment,
					 		com_time : com_time
				 		},
				 		success: function(returndata){
				 			//num ++;
							alert("Success!!");
							var com_num = returndata[0]['com_num'];
							$('#t_com_num').text('Comments: '+com_num);
							$('#com_com_num').text(com_num+' Comments');
							var com_result = returndata[1];
							$('#comment_wrap').empty();
							var floor = com_num;
							for(var i=0;i<com_result.length;i++){
								$('#comment_wrap').append('<div class=avatar-wrap><img src="'+com_result[i]['profile_img']+'" alt="" /></div>');
								$('#comment_wrap').append('<div class="comment-text-wrap"><div class="comment-title">'+com_result[i]['com_user']+' &nbsp;&nbsp;<span class="post-number">#'+floor +'</span></div><div class="comment-text">'+com_result[i]['comments']+'<div class="date-reply-wrap"><div class="date-time">'+com_result[i]['com_time']+'</div></div></div></div>');
								floor--;
							}
							$('#comment').val("");
					 	},
					 	error: function(err) {     
			                alert("Error");     
			            }     
				 	});
				 	location.href = "<?php echo $_SERVER['REQUEST_URI'];?>"+'#comments-count';
				 
				 });
		 		
			 </script>
			</div>
			<?php include 'life_right.php';?>
		</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
