<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title><?=$title;?></title>
	<meta name="keywords" content="<?=$keywords;?>" />
	<meta name="description" content="<?=$description;?>" />
	<link rel="stylesheet" href="/fonts/bebasneue.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen, projection" />
	<link type="text/css" rel="stylesheet" href="/css/style.css" />
	<link type="text/css" rel="stylesheet" href="/css/style_main.css" />
	<link type="text/css" rel="stylesheet" href="/css/style_menu.css" />
	<link href="/css/canvas.css" rel="stylesheet" type="text/css" />
	
    <script src="http://code.jquery.com/jquery-2.0.0b2.js"></script>
    <script src="/Lyne.js-master/src/Lyne.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		
 <script>
$(document).ready(function(){

	// calculate height
	var screen_ht = $(window).height();
	var preloader_ht = 5;
	var padding =(screen_ht/2)-preloader_ht;
	
	$("#preloader").css("padding-top",padding+"px");

});



$(document).ready(function(){

// loading animation using script 

/* 	function anim() {
		$("#preloader_image").animate({left:'-1400px'}, 5000,
		function(){ $("#preloader_image"),animate({left:'0px'}, 5000 );
			if (rotate==1){
				anim();
			}
		}
		);
	}

	anim(); */

});



rotate = 1;

function hide_preloader() {
	// To stop the preloader 
	rotate = 0; 
	// To apply Fade Out Effect to the Preloader 
	$("#preloader"). css('display','none') .queue(function() {
	
	start_page();
	})
	} 

</script> 

</head>

<body onload="hide_preloader()">

<div id="preloader">

	<div><img src="/img/loading.jpg" width="100%" id="preloader_image" ></div>

</div> <!-- #preloader -->