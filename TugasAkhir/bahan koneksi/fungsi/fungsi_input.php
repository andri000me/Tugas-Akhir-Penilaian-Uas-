<?php
include"Connections/koneksi.php";
function in_komen(){

if(isset($_POST['input']))
		{
		$a=$_POST['no'];
		$b=$_POST['nama'];
		$c=$_POST['email'];
		$d=$_POST['komentar'];
		mysql_query ("CALL in_komen('$a','$b','$c','$d')");
		}
	}
	
?>

