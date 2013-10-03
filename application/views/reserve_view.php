<? include('header.php');?>


	
<div align="center" style="margin-top:150px;">  


<h1> Thank You For Reserving Scure! </h1>
<br>

<?
	if(isset($_SESSION['email'])){

		echo "<h3>";  echo $_SESSION['email'];  echo "</h3>";

	}

?>

<br>
<p style="width:750px; font-family: 'Lato', sans-serif; color:gray; font-size:18px; line-height:30px;">

We will be updating you when Scure reaches some important milestones and then again when development is nearing completion!  
<br><br>

<?

	if(isset($_SESSION['reserveCount'])){

		echo "<strong>"; echo $_SESSION['reserveCount'];   echo "</strong>"; echo "  reservations made so far!";



	}
?>
</p>


</div>

















