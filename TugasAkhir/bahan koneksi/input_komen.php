<?php
require_once('fungsi/fungsi_input.php');
in_komen();
?>
<html>
<head>
<title>Input Komentar</title>
</head>
<body background="../image/bb.jpg">
<h1 align="center">Input Komentar</h1>
<table align="center" width="350" border="2">
<form name="forml" method="post" action="">
<tr>
<td bgcolor="#00FFFF">No</td>
<td bgcolor="#00FFFF" align=center>:</td>
<td bgcolor="#00FFFF"><input type="text" name="no"></td>
</tr>
<tr>
<td bgcolor="#00FFFF">Nama</td>
<td bgcolor="#00FFFF" align=center>:</td>
<td bgcolor="#00FFFF"><input type="text" name="nama"></td>
</tr>
<tr>
<td bgcolor="#00FFFF">Email</td>
<td bgcolor="#00FFFF" align=center>:</td>
<td bgcolor="#00FFFF"><input type="email" name="email"></td>
</tr>
<tr>
<td bgcolor="#00FFFF">Komentar</td>
<td bgcolor="#00FFFF" align=center>:</td>
<td bgcolor="#00FFFF"><textarea name="komentar"></textarea></td>
</tr><tr><td align="center" colspan="3"><input type="submit" name="input" value="Simpan">
<input type="reset" name="batal" value="Batal">
</td>
</table>
<br>
<table border="1" align="center">
<?php
	$exe=mysql_query("select * from bukutamu") or die(mysql_error());
?>
<tr>
<td colspan="8" bgcolor="#0099FF"><center>Kritik dan Saran</center></td>
</tr>
<tr>
<td bgcolor="#00CCFF">No</td>
<td bgcolor="#00CCFF">Nama</td>
<td bgcolor="#00CCFF">Email</td>
<td bgcolor="#00CCFF">Komentar</td>
<td colspan="2" bgcolor="#00CCFF">Action</td>
</tr>
<?php
while($tampil=mysql_fetch_array($exe))
{
?>
<tr>
<td><?php echo $tampil['no'];?></td>
<td><?php echo $tampil['nama'];?></td>
<td><?php echo $tampil['email'];?></td>
<td><?php echo $tampil['komentar'];?></td>
<td align="center">&nbsp;
<a href="update_komen.php?no=<?php echo $tampil['no']?>">Edit</a></td>
<?php
}
?>
</tr>
</table>
</body>
</html>	