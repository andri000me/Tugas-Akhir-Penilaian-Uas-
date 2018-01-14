<?php
require_once('Connections/koneksi.php');
function up_komen(){

if(isset($_POST['edit']))
		{
		$a=$_POST['no'];
		$b=$_POST['nama'];
		$c=$_POST['email'];
		$d=$_POST['komentar'];
		mysql_query ("CALL up_komen('$a','$b','$c','$d')");
		}
	}
	
?>

