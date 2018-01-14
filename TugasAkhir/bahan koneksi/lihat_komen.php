<html>
<body">
<table border="1" align="center">
<?php
require_once('fungsi/fungsi_hapus.php');
del_komen();
?>
<?php require_once('Connections/koneksi.php'); ?>
<?php
	$exe=mysql_query("select * from bukutamu") or die(mysql_error());
?>
<tr>
<td colspan="8" bgcolor="#0099FF"><center>
  <strong>Kritik dan Saran</strong>
</center></td>
</tr>
<tr>
<td bgcolor="#00CCFF"><div align="center"><strong>No  </strong></div></td>
<td bgcolor="#00CCFF"><div align="center"><strong>Nama </strong></div></td>
<td bgcolor="#00CCFF"><div align="center"><strong>Email</strong></div></td>
<td bgcolor="#00CCFF"><div align="center"><strong>Komentar </strong></div></td>
<td colspan="2" bgcolor="#00CCFF"><div align="center"><strong>Action</strong></div></td>
</tr>
<?php
while($tampil=mysql_fetch_array($exe))
{
?>
<tr>
<td><?php echo $tampil['no'];?></td>
<td><?php echo $tampil['nama'];?></td>
<td><?php echo $tampil['email'];?></td>
<td><textarea> <?php echo $tampil['komentar'];?></textarea></td>
<td align="center">
<a href="update_komen.php?no=<?php echo $tampil['no']?>"><img src="image/edit.jpg" width="52" height="22" border="0"></a></td>
<td align="center">
<a a href="lihat_komen.php?no=<?php echo $tampil['no']?>"><img src="image/delete.png" width="52" height="22"></a></td>
<?php
}
?>
</tr>
</table>
</body>
</html>	