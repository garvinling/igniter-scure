<!DOCTYPE HTML>

<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>

		<head profile="http://www.w3.org/2005/10/profile">
		<link rel="icon" type="image/png" href="http://example.com/myicon.png">
		<link href="http://static.scripting.com/github/bootstrap2/css/bootstrap.css" rel="stylesheet">
		


		<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
		<script src="http://scure.me/Chart.js-master/Chart.js"></script>

		<script src="bootstrap/js/bootstrap.js"></script>

		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">	
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/styles2.css">
		<!--<link rel="stylesheet" type="text/css" href="Flat-UI-master/js/application.js">-->
		<!--<link rel="stylesheet" type="text/css" href="Flat-UI-master/css/flat-ui.css">-->

		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>
		<script>

		$(document).ready(function(){

			$('#hero_title').fadeOut(1);
			$('#hero_paragraph').fadeOut(1);
			$('#hero_button').fadeOut(1);
			$('#room_temp').fadeOut(1);
			$('#snapshot').fadeOut(1);
			$('#temperature_value').fadeOut(1);
			$('#decibel_value').fadeOut(1);
			$('#traffic_value').fadeOut(1);
			$('#visitor_value').fadeOut(1);
			$('#temp_level').fadeOut(1);
			$('#sound_level').fadeOut(1);
			$('#traffic_level').fadeOut(1);
			$('#visitor_level').fadeOut(1);
			$('#hub_title').fadeOut(1);
			$('#summary').fadeOut(1);
			$('#hub_title').fadeIn(1000);
			$('#summary').fadeIn(1000);


			$('#temp_level').fadeIn(1800);
			$('#sound_level').fadeIn(2200);
			$('#traffic_level').fadeIn(2600);
			$('#visitor_level').fadeIn(2800);

			$('#temperature_value').fadeIn(3000);
			$('#decibel_value').fadeIn(3200);
			$('#traffic_value').fadeIn(3400);
			$('#visitor_value').fadeIn(3600);


			$('#snapshot').fadeIn(1200);
			$('#room_temp').fadeIn(2000);
			
			$('#hero_title').fadeIn(2000);
			$('#hero_paragraph').fadeIn(3000);
			$('#hero_button').fadeIn(4500);
			$('#draggable').draggable();
			$('#windowTitleDialog').bind('show', function () {
					document.getElementById ("xlInput").value = document.title;
					});

			$('#slideshow').cycle('fade');

  	
				$('section[data-type="background"]').each(function(){

						var $bgobj = $(this); 

						$(window).scroll(function(){

							var yPos = -($window.scrollTop() / $bgobj.data('speed'));

							var coords = '50%' + yPos + 'px';

							$bgobj.css({backgroundPosition: coords});

						});

				});
					document.createElement("article");
					document.createElement("section");
		});

	function closeDialog () {
				$('#myModal').modal('hide'); 
				};
			function okClicked () {
				document.title = document.getElementById ("xlInput").value;
				closeDialog ();
				};

		</script>



	</head>
		
		


<body>


<div id="fb-root"></div>  
<script>


	(function(d, s, id) {  
	  var js, fjs = d.getElementsByTagName(s)[0];  
	  if (d.getElementById(id)) return;  
	  js = d.createElement(s); js.id = id;  
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";  
	  fjs.parentNode.insertBefore(js, fjs);  
	}(document, 'script', 'facebook-jssdk'));

</script>  




<!-- NAVBAR -->
<div class="navbar navbar-inverse navbar-fixed-top">  
  <div class="navbar-inner">  
    <div class="container">  
    <ul class="nav">  
  <li class="active">  
    <a class="brand" href="index.php">Scure <p style="font-size:8px; display:inline;">BETA</p></a>  
  </li>  
    <li><a href="about">About Us</a></li>  

  <li><a href="blog">Updates <span class="badge badge-important">2</span></a></li>

<!--
  <li><a href="#">Pricing</a></li>  
  <li><a href="#">Contact</a></li>  
 -->
</ul>  
<ul class="nav">  
  <li class="dropdown">  
    <a href="#"  class="dropdown-toggle" data-toggle="dropdown"> Resources  
    <b class="caret"></b>  
    </a>  
	    <ul class="dropdown-menu">  
	     	<li><a href="#">Firmware</a></li>  
	  		<li><a href="#">Schematics</a></li>  
	  		<li><a href="#">Hardware / CAD </a></li>  
	    </ul>  
  </li>  
</ul>  
<!--
<form class="navbar-search pull-left">  
  <input type="text" class="search-query" placeholder="Search">  
</form> --> 
<ul class="nav pull-right">  
  <li class="dropdown">  
    <a href="admin" class="about"  data-toggle="dropdown">  
          Log in  
          <b class="caret"></b>  
    </a>  
    <ul class="dropdown-menu">  
     <li class="socials"><!-- Place this tag where you want the +1 button to render -->  
<g:plusone annotation="inline" width="150"></g:plusone>  
</li>  
  <li class="socials"><div class="fb-like" data-send="false" data-width="150" data-show-faces="true"></div></li>  
  <li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>  
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>  
    </ul>  
  </li>  
</ul>  
    </div>  
  </div>  
</div>  
<!-- NAVBAR END -->





<script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-dropdown.js"></script>  
<script type="text/javascript">  
  (function() {  
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;  
    po.src = 'https://apis.google.com/js/plusone.js';  
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);  
  })();  
</script>  
	





	 	<!-- Modal -->
	

	





