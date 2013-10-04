<? 
	include('header.php');

	$system_status = $_SESSION['system_status'];
	$daily_log_array = $_SESSION['daily_log_array'];
	$daily_log_time_array = $_SESSION['daily_log_time_array'];
    $date = date("m/d/y");

   	include('profile_header.php');

?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){


	$("#arm_button").click(function(){
			var buttonStatus = $("#arm_button").val();
  			//We need to also handle loading to the database. 

  			/** AJAX Live Loading Section **/ 
  			$.ajax({
  				url: "welcome/liveUpdateActivity",
  				cache: false,
  				success: function(html){

  					$("ul#update").append(html);
  					//$("ul#update li:last").fadeOut(0.5);
  					$("ul#update li:last").hide().fadeIn(2000);

  					buttonStatus = buttonStatus.toLowerCase();
  					if(buttonStatus.toLowerCase().indexOf("disarm") != -1){

  								$("#arm_button").val("Arm System");
  							    $("#arm_button").addClass('btn-success').removeClass('btn-danger');
  							    $("#system_status_text").html("Unarmed");
  							    $("#system_status_text").css("color","green");
  							    $("#system_status_text").hide().fadeIn(1000);

  					}
  					else{

  							 $("#arm_button").val("Disarm System");
  							 $("#arm_button").addClass('btn-danger').removeClass('btn-success');
  							 $("#system_status_text").html("Armed");
  							 $("#system_status_text").css("color","red");
  							 $("#system_status_text").hide().fadeIn(1000);

  					}

  				}

  			});//end AJAX
  	}); // end on click
});// end document ready

</script>


<!-- BODY BEGIN -->
<body bgcolor="#03899C" style="background-image:url('http://scure.me/img/grey.png'); background-attachment:fixed;">


<div id="container" style="background-color:white;margin-top:110px; padding:15px;">
	<ul class="nav nav-pills">		 
		  <li class="active">
		    <a href="welcome" style="font-family: 'Lato', sans-serif; ">Home</a>
		  </li>
		  <li><a href="#"  onclick='return settingFade()' style="font-family: 'Lato', sans-serif; ">Settings</a></li>
		  <li><a href="#" onclick='return syncFade()' style="font-family: 'Lato', sans-serif; ">Sync Device</a></li>
	</ul>
	<p class="footer"></p>
	<br><br>



<?
		$timezone = date_default_timezone_get();
		date_default_timezone_set($timezone);
		$time = time();
?>
	

<!-- SUMMARY/GRAPH SECTION -->
<div class="row-fluid" align="center" style="margin-top:0px; margin-left:auto; margin-right:auto;">
	 

	  <div class="span6" id="radarGraph"> 
			<h1 id="hub_title"style="font-family: 'Abel', sans-serif;">Hub Statistics</h1><br>
			<canvas id="doughnut" height="350" width="350" ></canvas>
	  </div>


	  <div class="span6"  id="summary" align="left" style="padding-left:75px;">
	  		<!-- users can adjust the level of notifications received in the summary -->
			<h1 style="font-family: 'Abel', sans-serif;">Summary for <? echo $date; ?></h1><br>
			<p style="font-family: 'Abel', sans-serif; margin-bottom:70px; width:400px; text-align:left;"> <!-- get rid of margin bott -->
			
<!-- add fixed length with scrolling -->
			<ul id="update" style="font-family: 'Abel', sans-serif; margin-bottom:40px; width:400px; text-align:left; list-style-type:none; ">

<?	

			//echo date("g:i a.", time());     //4:45 pm.
			$length = sizeof($daily_log_array);


						for($i = 0 ; $i < $length ; $i = $i + 1){
							echo "<li>";
							echo $daily_log_array[$i]." "; echo "<span style=\"color:red;\">".$daily_log_time_array[$i]."</span><br>";
							echo "</li>";

						}

			
?>

			</ul>
			</p>
			
		<span class="alert alert-info">Scure will continue to update the summary as the day goes on!</span>

		<? if(strpos($system_status, 'Disarm')!== false){?>
		<h4 style="font-family: 'Abel', sans-serif;"> System Status: <span id="system_status_text"style="color:red;">Armed</span></h4>
		 <!--<button onclick="location.href='welcome/changeAlarmStatus';"class="btn btn-large btn-primary btn-danger" type="button" id="arm_button"><?echo $system_status;?></button>
		 -->
		 <input type="submit" class="btn btn-large btn-danger" id="arm_button" value="<?echo $system_status;?>"/>

		<?}else{?>
		<h4 style="font-family: 'Abel', sans-serif;"> System Status: <span id="system_status_text"style="color:green;">Unarmed</span></h4>
		<!--<button onclick="location.href='welcome/changeAlarmStatus';"class="btn btn-large btn-primary btn-success" type="button" id="arm_button"><?echo $system_status;?></button>
		-->
		 <input type="submit" id="arm_button" class="btn btn-large btn-success" value="<?echo $system_status;?>"/>

		<?}?>
	  </div>
</div>
<br>





	<!-- SNAPSHOT AREA -->
	<h2 id="snapshot" style="font-family: 'Abel', sans-serif;">Snapershot</h2>
	<p class="footer"></p>
	<br>
	<!-- Have these sections change colors based on threshold set by user.  ?animated jquery? --> 
	<div class ="row-fluid" align="center" style="margin-left:0px; margin-bottom:100px;">
		
		<div class="span3" style="background-color:#CC333F; color:white; height:220px;">				
		<h2 id="temp_level" style="font-family: 'Abel', sans-serif; "> Room Temperature</h2>  
		<br>
		<h1 id="temperature_value" style="font-family: 'Roboto Condensed', sans-serif; font-size:46px;"><? echo "73 F";?></h1>
		</div>
		
		<!-- Decibel reading,  (40 db  = quiet living room) --> 
		<div class="span3" style="background-color:#00A0B0; color:white; height:220px;">				
		<h2 id="sound_level" style="font-family: 'Abel', sans-serif;"> Sound Level</h2>	
		<br>
		<h1 id="decibel_value" style="font-family: 'Roboto Condensed', sans-serif; font-size:46px;"><? echo "42 dB";?></h1>
		</div>
		
		<!-- Traffic will display the amount of foot traffic in the area.  For example, user can set an acceptable amount of foot traffic -->
		<div class="span3" style="background-color:#EB6841; color:white; height:220px;">				
		<h2 id="traffic_level" style="font-family: 'Abel', sans-serif;">Traffic</h2>	
		<br>
		<h1 id="traffic_value" style="font-family: 'Roboto Condensed', sans-serif; font-size:46px;"><? echo "Medium";?></h1>
		</div>

		<div class="span3" style="background-color:#EDC951; color:white; height:220px;">				
		<h2 id="visitor_level" style="font-family: 'Abel', sans-serif;">Visitors</h2>	
		<br>
		<h1 id="visitor_value" style="font-family: 'Roboto Condensed', sans-serif; font-size:46px;"><? echo "2";?></h1>
		</div>
	
	</div>
	<!-- END SNAPSHOT AREA --> 




	<h2 id="snapshot" style="font-family: 'Abel', sans-serif;">Week At-A-Glance (9/1/13 - 9/7/13)</h2>
	<p class="footer"></p>

<div class="row-fluid" align="center" style="margin-top:-10px; margin-left:auto; margin-right:auto;">

	<br><br>


	  <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;"> 
		    <ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 
			<h3>Mon.</h3>

	  </div>
	  <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
				  		<ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 
			<h3>Tue.</h3>
	  </div>


	  <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
				  		<ul style="text-align:left;">
	  		<li>Left Home	   (9:10 PM)</li>
			<li>Arrived Home   (8:30 PM)</li>
			</ul>
			<a href="#">Details</a>
			<h3>Wed.</h3>
			<p class="label label-important">Alarm Triggered	   (12:24 PM)</p>

	  </div>	 

	   <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
					  		<ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 
			<h3>Thurs.</h3>
	  </div>
	     
	     <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
						  		<ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 
			<h3>Fri.</h3>
	  </div>
	     
	        <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
							  		<ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 
			<h3>Sat.</h3>
	  </div>

	  <div class="span3" style="width:150px;font-family: 'Abel', sans-serif;">
							  		<ul style="text-align:left;">
	  		<li>Left Home      (9:21 AM)</li>
			<li>Arrived Home   (8:33 PM)</li>
			</ul>
			<a href="#">Details</a> 

			<h3>Sun.</h3>
	  </div>
	</div>





	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	<a href="logout" class="btn btn-large btn-primary">Logout</a>

</div>



	<script>

		var radarChartData = {
			labels : ["Motion","","Sound","","","Temperature",""],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [87,67,54,79,87,71,65]
				}
			]
			
		}

	var myRadar = new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
	



	var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [75,89,70,71,66,85,70]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [78,68,70,79,76,87,90]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	</script>
		<script>

		var doughnutData = [
				{
					value: 30,
					color:"#F7464A"
				},
				{
					value : 50,
					color : "#46BFBD"
				},
				{
					value : 100,
					color : "#FDB45C"
				},
				{
					value : 40,
					color : "#949FB1"
				},
				{
					value : 120,
					color : "#4D5360"
				}
			
			];

	var myDoughnut = new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
	
	</script>

</body>
</html>




 









