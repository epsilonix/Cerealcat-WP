<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
/* @package WordPress
 * @subpackage cerealcat
 * @since cerealcat 1.0
 */

get_header(); ?>

<body>
	
		<script>
		  // Resizes page border properly
		  function resizePageBorder() {
		   var MAX_WIDTH = 1500;
		   var width = $(window).width();
		   if (width < MAX_WIDTH) {
			$(".pageborder").css({"width": "90%"});
		   } else {
			$(".pageborder").css({"width": MAX_WIDTH});
		   }
		  }
		  
		  $(window).resize(function() {
		   resizePageBorder();
		  });
  
		</script>

	
	<div class="pageborder">
		<div class="midlogoholder"> 
			<img src="images/cerealcolor.png" class="midlogo" id="midlogo"></img>
		</div>
		
		<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
		
		
		<!-- main body -->
		<div class="about">
			<div class="container">
			
		
				<marquee behavior=scroll direction=down scrollamount=6 scrolldelay=20 height=676 style='position:absolute; left:13%; top:155px; width:18; height:676px;'><img src=http://orig05.deviantart.net/2a5e/f/2011/323/0/6/scrap___rainbow_ex_by_firstfear-d4gnkvd.gif border=0></marquee>

			
				<div class="about-main">
					<div class="col-md-8 about-left">
						<div class="about-one">
							<p>Find The Most</p>
							<h3>Cat of the month</h3>
						</div>
						<div class="about-two">
							<a href="single.html"><img src="images/christmas.jpg" alt="" /></a>
							<p>Posted by <a href="#">Sam</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
							
							<div class="about-btn">
								<a href="single.html">Read More</a>
							</div>
							<ul>
								<li><p>Share : </p></li>
								<li><a href="#"><span class="fb"> </span></a></li>
								<li><a href="#"><span class="twit"> </span></a></li>
								<li><a href="#"><span class="pin"> </span></a></li>
								<li><a href="#"><span class="rss"> </span></a></li>
								<li><a href="#"><span class="drbl"> </span></a></li>
							</ul>
						</div>	
						<div class="about-tre">
							<div class="a-1">
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-3.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-4.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="a-1">
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-5.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-6.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="a-1">
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-7.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="col-md-6 abt-left">
									<a href="single.html"><img src="images/c-8.jpg" alt="" /></a>
									<h6>Find The Most</h6>
									<h3><a href="single.html">Tasty Coffee</a></h3>
									<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
									<label>May 29, 2015</label>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					
					<?php get_sidebar(); ?>
					
					<div class="clearfix"></div>			
				</div>		
			</div>
		</div>
		<!--about-end-->
		<!--slide-starts-->
		<div class="slide">
			<div class="container">
				<div class="fle-xsel">
				<ul id="flexiselDemo3">
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-1.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-2.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>			
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-3.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>		
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-4.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>	
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-5.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>	
					<li>
						<a href="#">
							<div class="banner-1">
								<img src="images/s-6.jpg" class="img-responsive" alt="">
							</div>
						</a>
					</li>				
				</ul>
								
								 <script type="text/javascript">
									$(window).load(function() {
										
										$("#flexiselDemo3").flexisel({
											visibleItems: 5,
											animationSpeed: 1000,
											autoPlay: true,
											autoPlaySpeed: 3000,    		
											pauseOnHover: true,
											enableResponsiveBreakpoints: true,
											responsiveBreakpoints: { 
												portrait: { 
													changePoint:480,
													visibleItems: 2
												}, 
												landscape: { 
													changePoint:640,
													visibleItems: 3
												},
												tablet: { 
													changePoint:768,
													visibleItems: 3
												}
											}
										});
										
									});
									</script>
									<script type="text/javascript" src="js/jquery.flexisel.js"></script>
						<div class="clearfix"> </div>
				</div>
			</div>
		</div>	
		<!--slide-end-->

		<?php get_footer(); ?>
		
	</div> 
</body>
</div>
</html>