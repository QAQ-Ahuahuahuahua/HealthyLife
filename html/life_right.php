			<div class="col-md-3 col-md-offset-1 right" >
			
			<div class="search-sec" >
			<div class="row">
	    <form action="lifestyle.php" method="get" role="search">	    
	                <div class="col-md-11">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" id="blog_search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" >Go!</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
         
        </form>
        <script type="text/javascript">
        $("#blog_search").autocomplete({
        	source: function(request, response){
        		$.ajax({
        			type : "POST",
        			url: "search.php",
        			async: false,
        			dataType: 'json',
        			data : {
        				blog_keyword : request.term
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
        </div>
		</div>
			<div id="content-right">
			
				<div class="row">
					<div class="content-right-header">Categories</div>
					<ul id="blog-category">
					<?php 
					$mysqli = connect_mysql();
					$sql = "SELECT bc.category,bc.id,COUNT(b.category) FROM Blog_category bc LEFT JOIN Blog b ON bc.id = b.category GROUP BY bc.id";
					if ($stmt = $mysqli->prepare($sql)) {
						$result=$stmt->execute();
						$stmt->bind_result($all_cate, $cate_ids,$cate_num);
						while($stmt->fetch()){
							echo "<li><img src=\"images/blog/arrow_right.png\" class=\"right-category-image\" alt=\"Arrow right icon\" /><a href=\"lifestyle.php?category=$cate_ids\">$all_cate</a> <span class=\"post-count\">($cate_num)</span></li>";
						}
						$stmt->close();
					}
					?>
					</ul>
				</div>
				<div class="row">
					<div class="content-right-header">Popular Posts</div>
					<ul id="sidebar-popular">
					<?php 
					$mysqli = connect_mysql();
					$sql = "SELECT bf.blog_id, b.article_name FROM Blog_follower bf,Blog b WHERE bf.blog_id = b.id GROUP BY bf.blog_id ORDER BY COUNT(bf.blog_id) DESC, b.date DESC LIMIT 3";
					if ($stmt = $mysqli->prepare($sql)) {
						$result=$stmt->execute();
						$stmt->bind_result($blog_id, $article_name);
						while($stmt->fetch()){
							echo "<li><img src=\"images/blog/star.png\" alt=\"Star icon\" class=\"sidebar-popular-star\" /><a href=\"blogpost.php?blog_id=$blog_id\" class=\"scroll\">$article_name</a></li>";
						}
						$stmt->close();
					}
					?>
					</ul>
				</div>
				<div class="row">
						<div class="content-right-header">Archives</div>
						<ul id="sidebar-archive">
						<?php
						$sql = "SELECT DISTINCT DATE_FORMAT(date,'%M %Y') FROM Blog WHERE date BETWEEN DATE_SUB(NOW(),INTERVAL 6 MONTH) AND NOW();";
						if ($stmt = $mysqli->prepare($sql)) {
							$result=$stmt->execute();
							$stmt->bind_result($archi_time);
							while($stmt->fetch()){
								$timestamp = strtotime($archi_time);
								echo "<li><a href=\"lifestyle.php?time=$timestamp\" class=\"scroll\"><img src=\"images/blog/gear.png\" class=\"archive-image\" alt=\"Archive icon\" />$archi_time</a></li>";
							}
							$stmt->close();
						}
						?>
					</ul>
				</div>
			</div>
			</div>