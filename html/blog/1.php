<?php
/**
 * @author zjh
 */
$baseUrl ='http://playground.eca.ed.ac.uk/~s1614491/';
?>
<!DOCTYPE html>
<html>
<head>
		<base href=<?php echo $baseUrl;?>>
		<meta charset="utf-8" />
		<meta name="description" content="Enter there short description of your site" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/blog/style1.css" />
		<script type='text/javascript' src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include '../header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 left">
			<div id="content-left">
			<div class="row blog">
				<div class="post-wrap">
					<div class="post-date"><span class="day">10</span> <span class="month">FEB</span> <span class="year">2017</span></div>
					<div class="post-header">Fighting Fatigue? Get a Better Life</div>
					<div class="post-info-wrap">POST BY: <span class="author-name">Jeanie Lerche Davis</span> in <a href="#">Women's Health</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#comments-count" class="scroll">Comments: 2</a></div>
					<img src="images/blog/field-847647_1280.jpg" class="img-thumbnail img-responsive" alt="Enter here a description of pictures" />
					<div class="post-descr">
						<p>Feeling tired, zapped of energy? You're not the Lone Ranger.<br><br>
						Doctors see it all the time: "Women with four kids, a full-time job, and they get up at 5 to get everybody ready for the day. Their lives are very hectic, they only get four hours of sleep. They expect their bodies to do more than is realistic for one person," says Sharon Horesh, MD, primary care specialist with the Emory Clinic in Atlanta.<br><br>
                        Fatigue has many origins. For women, anemia brought on by heavy menstrual cycles may cause fatigue. An underactive thyroid also causes fatigue. A cold, sinus infection, or virus can drag you out -- even for three or four weeks. But all too often, you're not taking care of yourself. It's as simple, and as difficult, as that.<br><br>			
						First step, take stock of your life. If you can't juggle it all, get some perspective. "Decide whether you're putting yourself under unnecessary stress," says Inyanga Mack, MD, professor of primary and community medicine at Temple University School of Medicine in Philadelphia.<br><br>
						For many people -- especially women in their 30s and 40s -- severe anxiety and depression are leading causes of fatigue, says Horesh. "Anxiety puts your body into overdrive and wears down the immune system. Some people even have medical symptoms like chest pain, racing heart, heart palpitations because their bodies are in overdrive. They're getting shots of adrenaline all the time."<br><br>
						Exercise is a great stress-relief aide -- even if you're too tired for it, says Mack. "If you're feeling overwhelmed, tired for whatever reason, exercise might be the last thing you feel like doing. But moderate amounts of exercise can actually help your mood. You will have more energy and require less sleep. Exercise will make you more tired at night, and you will fall into a deeper sleep, get better rest."<br><br>
                        Even if you're trying to eat right, you may be doing it wrong. "Diet is important," says Horesh. Fruits and vegetables fill you up with fewer calories. But they won't give you the long-lasting energy that you get from proteins and complex, starchy carbohydrates like whole-grain breads, pasta, rice, and beans.</p>
					</div>
				</div>
			 </div>
			 <div class="row comment">
			 	<div id="comments-count">1 Comments</div>
			 	<div id="comment-section">
					<div class="comment-wrap">
						<div class="avatar-wrap">
							<img src="images/blog/avatar1.jpg" alt="Avatar" />
						</div>
						<div class="comment-text-wrap">
							<div class="comment-title">Andry Raien &nbsp;&nbsp;<span class="post-number">#1</span></div>
							<div class="comment-text">"Shoulds" are the enemy of relaxation. Don't think about what you should do, but about what makes you thrive. 
								<div class="date-reply-wrap">
									<div class="date-time">Feb 10, 2017 at 02:28 PM</div>
									<div class="comment-reply"><a href="#">Reply<img src="images/blog/reply_icon.png" alt="Reply Icon" class="reply-icon" /></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="comment-answer-wrap">
						<div class="avatar-wrap">
							<img src="images/blog/avatar2.jpg" alt="Avatar" />
						</div>
						<div class="comment-text-wrap">
							<div class="comment-title">Johny Di &nbsp;&nbsp;<span class="post-number">#2</span> <span class="inreplyto">&nbsp;&nbsp;(in reply to Andry Raien)</span></div>
							<div class="comment-answer-text">So it is.
								<div class="date-reply-wrap-answer">
									<div class="date-time">Feb 12, 2017 at 09:41 PM</div>
									<div class="comment-reply"><a href="#">Reply<img src="images/blog/reply_icon.png" alt="Reply Icon" class="reply-icon" /></a></div>
								</div>
							</div>
						</div>
					</div>-->
				</div>
			 </div>
			 <div class="row leave_comment">
			 		<div id="comment-post-section">
					<h1 class="header1 text-left">Leave a Comment</h1>
					<form>
	    				<div>Your Name <span class="asterisk">*</span></div>
						<input type="text" class="form-control" />
						<div>Your Email <span class="asterisk">*</span></div>
						<input type="text" class="form-control"/>
						<div>Your Message <span class="asterisk">*</span></div>
						<textarea class="form-control"></textarea><br />
						<input type="submit" value="submit" id="send-button" class="btn btn-info" name="submit"/>
					</form>
				</div>
			 </div>
			</div>
			</div>
			<div class="col-md-3 col-md-offset-1 right" >
			<div id="content-right">
				<div class="row">
					<div class="content-right-header">Categories</div>
					<ul id="blog-category">
						<li><img src="images/blog/arrow_right.png" class="right-category-image" alt="Arrow right icon" /><a href="#">Women's Health</a> <span class="post-count">(15)</span></li>
						<li><img src="images/blog/arrow_right.png" class="right-category-image" alt="Arrow right icon" /><a href="#">Men's Health</a> <span class="post-count">(13)</span></li>
						<li><img src="images/blog/arrow_right.png" class="right-category-image" alt="Arrow right icon" /><a href="#">Teen health</a> <span class="post-count">(24)</span></li>
					</ul>
				</div>
				<div class="row">
					<div class="content-right-header">Popular Posts</div>
					<ul id="sidebar-popular">
						<li>
							<img src="images/blog/star.png" alt="Star icon" class="sidebar-popular-star" />
							<a href="#vegetips" class="scroll">Fighting Fatigue? Get a Better Life</a>
							<div class="sidebar-desc">by Jeanie Lerche Davis, 10 Feb 2017</div>
						</li>
						<li>
							<img src="images/blog/star.png" alt="Star icon" class="sidebar-popular-star" />
							<a href="#sirdolet" class="scroll">7 Muscle Foods for Men</a>
							<div class="sidebar-desc">by Kathleen M. Zelman, 01 Feb 2017</div>
						</li>
						<li>
							<img src="images/blog/star.png" alt="Star icon" class="sidebar-popular-star" />
							<a href="#quiplacer" class="scroll">5 Ways to Help Unfit Teens Get Moving</a>
							<div class="sidebar-desc">by Denis Tripod, 20 Jan 2017</div>
						</li>
					</ul>
				</div>
				<div class="row">
						<div class="content-right-header">Archives</div>
						<ul id="sidebar-archive">
						<li>
							<a href="#sirdolet" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />September 2016</a>
						</li>
						<li>
							<a href="#quiplacer" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />October 2016</a>
						</li>
						<li>
							<a href="#feuvita" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />November 2016</a>
						</li>
						<li>
							<a href="#sirdolet" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />December 2016</a>
						</li>
						<li>
							<a href="#sirdolet" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />January 2017</a>
						</li>
						<li>
							<a href="#sirdolet" class="scroll"><img src="images/blog/gear.png" class="archive-image" alt="Archive icon" />February 2017</a>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
