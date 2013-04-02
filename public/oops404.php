<?php 
session_start();
?>

I just met you and I love you!  But that page doesn't exist!<br><br>

<?php 
if(isset($_SESSION['SYSTEM_MESSAGE'])){
	echo $_SESSION['SYSTEM_MESSAGE']."<br>";
	unset($_SESSION['SYSTEM_MESSAGE']);
}
?>

