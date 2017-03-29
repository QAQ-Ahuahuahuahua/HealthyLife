<?php
/**
 * @author
 * @date 
 */
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Recipes</title>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/recipes/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">

<script type='text/javascript' src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include 'header.php';?>
	<div align="center"><img src="images/recipes/pic.jpg" height="800 " width="1280" alt="First slide" class="img-responsive" ></div>
<div class="search-sec container" >
	    <form action="recipes.php" method="get" role="search">
	    <div class="row">
	    <div class="col-md-10 ">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="keyword" id="recipe_search">
            </div>
         </div>
         <div class="col-md-2">
            <button type="submit" class="btn btn-default btn-block">Submit</button>
         </div>
         </div>
        </form>
</div>
<script type="text/javascript">

$("#recipe_search").autocomplete({
	source: function(request, response){
		$.ajax({
			type : "POST",
			url: "search.php",
			async: false,
			dataType: 'json',
			data : {
				recipe_keyword : request.term
			},
			success: function(data){
				response(data);
			},
			error: function(err) {     
                alert("Error");     
            } 
		});		
	},
	minLength: 2	
});
</script>
<div class="recp-sec">
	 <div class="container">
	 <div class="panel panel-extra">	
	 <div class="recip-grid">
			 
			 
				<ul id="myList">
<?php

	$mysqli = connect_mysql();
	$keyword = !empty($_GET['keyword'])?$_GET['keyword']:null;
	if($keyword!=null){
		$sql="SELECT r.id,r.recipe_name,r.content,ri.img_url FROM Recipes r,Recipe_Img ri Where r.id=ri.recipe_id AND (r.recipe_name LIKE ? OR r.content LIKE ?)";
		if ($stmt = $mysqli->prepare($sql)) {
			$stmt->bind_param("ss", $keyword,$keyword);
			$keyword = "%".$keyword."%";
			showRecipes($stmt);
		}
	}else{
		$sql = "SELECT r.id,r.recipe_name,r.content,ri.img_url FROM Recipes r,Recipe_Img ri Where r.id=ri.recipe_id";
		if ($stmt = $mysqli->prepare($sql)) {
			showRecipes($stmt);
		}
	}
	
function showRecipes($stmt){
	$result=$stmt->execute();
	$stmt->bind_result($recipe_id,$recipe_name, $content,$img_url);
	$stmt->store_result();
	$len = ceil($stmt->num_rows()/3);
	//echo $len;
	echo $img_url;
	for($i=1;$i<=$len;$i++){
		echo "<li ><div class=\"l_g\">";
		for($j=1;$j<=3;$j++){
			if($stmt->fetch()){
				echo "<div class=\"col-md-4 recip-sec\" id=\"recipe_$recipe_id\">";
				echo "<img src=\"$img_url\" alt=\"\" class=\"img-rounded\"/>";
				echo "<h3><a href=\"#\">$recipe_name</a></h3>";
				echo "<p>$content</p>";
				echo "</div>";
			}else{
				break;
			}
		}
		echo "</div></li>";
	}
	
	$stmt->close();
}
$mysqli->close();			
?>	
				 </ul>
				 
				 
			 </div>
	 
	 <div class="load_more">
	 <div id="loadMore">Load more</div>
	 <div id="showLess">Show less</div>
	</div>
	</div>
</div>
</div>
</div>
<!----> 
<div class="footer">
	 <div class="container"> </div>
</div>
<div class="copywrite">
	<div class="container"> </div>
</div>
<!---->  
<!-- jQuery (necessary JavaScript plugins) -->

<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>--> 

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="script/recipes.js"></script>
</script>
</body>
</html>