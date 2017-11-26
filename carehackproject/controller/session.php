<?php
	 session_start();
	 if(!$_SESSION['logged_in'])
		{
		  header("location:../index.php");
		}
?>