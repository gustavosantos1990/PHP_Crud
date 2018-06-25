<?php
session_start();
if(!isset($_SESSION['username'])==true){
	session_unset($_SESSION['username']);
	header("Location:index.php");
}
?>