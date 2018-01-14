<?php
include"Connections/koneksi.php";
error_reporting(0);
function del_komen(){
$no=$_GET['no'];
mysql_query("call del_komen('$no')");	
}
?>

