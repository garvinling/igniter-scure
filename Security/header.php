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
		

		<script src="bootstrap/js/bootstrap.js"></script>

		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">	
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/styles2.css">
		<link rel="stylesheet" type="text/css" href="Flat-UI-master/js/application.js">
		<!--<link rel="stylesheet" type="text/css" href="Flat-UI-master/css/flat-ui.css">-->

		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		
				<script>

		$(document).ready(function(){

			$('#hero_title').fadeOut(1);
			$('#hero_paragraph').fadeOut(1);
			$('#hero_button').fadeOut(1);
			
			$('#hero_title').fadeIn(2000);
			$('#hero_paragraph').fadeIn(3000);
			$('#hero_button').fadeIn(4500);
			
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


<div class="navbar navbar-fixed-top">  
  <div class="navbar-inner">  
    <div class="container">  
    <ul class="nav">  
  <li class="active">  
    <a class="brand" href="index.php">Scure</a>  
  </li>  
    <li><a href="about.php">About Us</a></li>  

  <li><a href="blog.php">Updates <span class="badge badge-important">1</span></a></li>

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
    <a href="#" class="dropdown-toggle"  data-toggle="dropdown">  
          Social  
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
	

	


	
</body>

</html>


