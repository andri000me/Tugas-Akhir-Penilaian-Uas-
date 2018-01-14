<?php
require_once('fungsi/fungsi_update.php');
up_komen();
?>
<html>
<head>
<title>Edit Komentar</title>
</head>
<body background="../image/bb.jpg">
<h1 align="center">
  <font face="Verdana, Arial, Helvetica, sans-serif" size="5" color="#CCFF33">EDIT KOMENTAR</font></h1>
<form name="forml" method="post" action="">
<table align="center" width="350" border="2">

<?php
	$a=$_GET['no'];
	$lihat=mysql_query("SELECT * FROM bukutamu where no='$a'");
	$data=mysql_fetch_array($lihat);
	
?>
<tr>
<td bgcolor="#00CCFF">No</td>
<td bgcolor="#00CCFF" align=center>:</td>
<td bgcolor="#00CCFF"><input type="text" name="no" value ="<?php echo $data['no'];?>"></td>
</tr>
<tr>
<td bgcolor="#00CCFF">Nama</td>
<td bgcolor="#00CCFF" align=center>:</td>
<td bgcolor="#00CCFF"><input type="text" name="nama" value ="<?php echo $data['nama'];?>"></td>
</tr>
<tr>
<td bgcolor="#00CCFF">Email</td>
<td bgcolor="#00CCFF" align=center>:</td>
<td bgcolor="#00CCFF"><input type="text" name="email" value ="<?php echo $data['email'];?>"></td>
</tr>
<tr>
<td bgcolor="#00CCFF">Komentar</td>
<td bgcolor="#00CCFF" align=center>:</td>
<td bgcolor="#00CCFF"><textarea name="komentar"><?php echo $data['komentar'];?></textarea></td>
</tr>
<tr><td align="center" colspan="3"><input name="edit" type="submit"  value="Edit">
<input type="reset" name="batal" value="Batal">
</td>
</table>
<div align="center"><a href="lihat_komen.php">Klik Disini Untuk Melihat Komentar</a></div>
<td align="center">&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>	