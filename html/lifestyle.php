<?php
/**
 * 
 */
?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8" />
		<meta name="description" content="Enter there short description of your site" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/lifestyle/style1.css" />
        <script type='text/javascript' src="js//jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
	</head>
	<body>
	<?php include 'header.php';?>
		<div id="main-content">
			<!-- BEGIN BLOG POST CONTENT -->
      <div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 left">
			
			<div id="content-left">
			  	<?php 
				$mysqli = connect_mysql();
				$category = !empty($_GET['category'])?$_GET['category']:null;
				$timestampe=!empty($_GET['time'])?$_GET['time']:null;
				$keyword = !empty($_GET['keyword'])?$_GET['keyword']:null;
				if($category !=null){
					$sql = "SELECT b.id,b.article_name,LEFT(b.article_content,400),b.date,b.author,b.category,bc.category,u.first_name,u.last_name,bi.img_url,COUNT(c.blog_id) FROM Blog b LEFT JOIN Comment c ON b.id=c.blog_id,Blog_category bc,User u,Blog_Img bi WHERE b.category=bc.id AND b.author=u.id AND b.id=bi.blog_id AND bc.id=? GROUP BY b.id";
					if ($stmt = $mysqli->prepare($sql)) {
						$stmt->bind_param("i", $category);
						showArticles($stmt);
					}
					
				}elseif ($timestampe!=null){
					$sql = "SELECT b.id,b.article_name,LEFT(b.article_content,400),b.date,b.author,b.category,bc.category,u.first_name,u.last_name,bi.img_url,COUNT(c.blog_id) FROM Blog b LEFT JOIN Comment c ON b.id=c.blog_id,Blog_category bc,User u,Blog_Img bi WHERE b.category=bc.id AND b.author=u.id AND b.id=bi.blog_id AND DATE_FORMAT(b.date,'%Y%m')=FROM_UNIXTIME(?,'%Y%m') GROUP BY b.id";
					if ($stmt = $mysqli->prepare($sql)) {
						$stmt->bind_param("s", $timestampe);
						showArticles($stmt);
					}
				}elseif ($keyword!=null){
					$sql = "SELECT b.id,b.article_name,LEFT(b.article_content,400),b.date,b.author,b.category,bc.category,u.first_name,u.last_name,bi.img_url,COUNT(c.blog_id) FROM Blog b LEFT JOIN Comment c ON b.id=c.blog_id,Blog_category bc,User u,Blog_Img bi WHERE b.category=bc.id AND b.author=u.id AND b.id=bi.blog_id AND (b.article_name LIKE ? OR b.article_content LIKE ?) GROUP BY b.id";
					if ($stmt = $mysqli->prepare($sql)) {
						$stmt->bind_param("ss", $keyword,$keyword);
						$keyword = "%".$keyword."%";
						showArticles($stmt);
					}
				}else{
					$sql = "SELECT b.id,b.article_name,LEFT(b.article_content,400),b.date,b.author,b.category,bc.category,u.first_name,u.last_name,bi.img_url,COUNT(c.blog_id) FROM Blog b LEFT JOIN Comment c ON b.id=c.blog_id,Blog_category bc,User u,Blog_Img bi WHERE b.category=bc.id AND b.author=u.id AND b.id=bi.blog_id GROUP BY b.id";
					if ($stmt = $mysqli->prepare($sql)) {
						showArticles($stmt);
					}
				}				
				
				function showArticles($stmt){
					$result=$stmt->execute();
					$stmt->bind_result($blog_id,$article_name,$article_content,$date,$author,$cate_id,$category,$first_name,$last_name,$img_url,$com_num);
						
					while($stmt->fetch()){
						//time
						$time = strtotime($date);
						$year = date("Y",$time);
						$mon = date("M",$time);
						$day = date("d",$time);
						echo "<div class=\"row blog\">
						<div class=\"post-wrap\">
						<div class=\"post-date\"><span class=\"day\">$day</span> <span class=\"month\">$mon</span> <span class=\"year\">$year</span></div>
						<div class=\"post-header\"><a href=\"blogpost.php?blog_id=$blog_id\">$article_name</a></div>
						<div class=\"post-info-wrap\">POST BY: <span class=\"author-name\">$first_name $last_name</span> in <a href=\"lifestyle.php?category=$cate_id\">$category</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href=\"blogpost.php?blog_id=$blog_id#comments-count\" class=\"scroll\">Comments: $com_num</a></div>
						<a href=\"blogpost.php?blog_id=$blog_id\"><img src=\"$img_url\" class=\"img-thumbnail img-responsive\" alt=\"Enter here a description of pictures\" /></a>
						<div class=\"post-descr\"><p>$article_content...</p></div>
						<div class=\"readmore\"><a href=\"blogpost.php?blog_id=$blog_id\">Read more ... </a></div>
						<div class=\"divider\"></div>
						</div>
						</div>";
					}
						
					$stmt->close();
				}
				
				?>
			</div>
			<!-- END BLOG POST CONTENT -->
            </div>
          
			<!-- BEGIN BLOG SIDEBAR -->
			<?php include 'life_right.php';?>
			<!-- END BLOG SIDEBAR -->
            </div>
            </div>
            </div>
		
		<div class="clear"></div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>