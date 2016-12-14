<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage cerealcat
 * @since cerealcat 1.0
 */

?>
<!DOCTYPE html>

<html>
<head>
	<title>Cerealcat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	


	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery.min.js"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	
	
	
</head>

    <header class="desktop">
			
        <div class="stickynav" id="main-header">
			
			<div class="abovenavbar" id="abovenavbar">
				<p align="right">LOG IN | LOG OUT</p>
			</div>
		
            <div class="inner">
			
			<div class="abovebar">
			</div>
		
			
                <nav class="right">
                    <div class="nav-images" id="nav-wrap">
                        <img src="images/animatedcat.gif" onload="this.width/=8;this.onload=null;">
                <!--    <img src="images/mini-timbits.png" data-href="timbits">
                        <img src="images/mini-sprinkles.png" data-href="sprinkles">
                        <img src="images/mini-boston.png" data-href="boston">
                        <img src="images/mini-flower.png" data-href="flower">
                        <img src="images/mini-cruler.png" data-href="cruler">
                        <img src="images/mini-priestly.png" data-href="priestly">
						
						-->
                    </div>
                    <span id="progress-bar" class="progress-bar"></span>
                </nav>
                <nav class="left1" class id>
					<div class="nav-images" id="nav-wrap1">
					  <img src="images/cerealcolor.png" class="toplogo" id="toplogo"></img>
						<script>
						$("#toplogo").hover(function(){
						 $(this).attr('src','images/cerealbright.png'); 
						 }, function(){
						 $(this).attr('src','images/cerealcolor.png'); 
									  
						 }           
						);
						</script> 
					</div>
				</nav>
            </div>
        </div>

	</header>
	
	<div id="content" class="site-content">