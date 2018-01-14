<html>
<head>
    <title>Kritik dan Saran</title>
</head>
<body>
    
<font size="4"><center><b>Kritik dan Saran</b></center><font>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFA600" height="40">
            <th width="14%">NO</th>&nbsp;
            <th width="12%">Nama</th>&nbsp;  
            <th width="25%">Email</th>&nbsp; 
            <th width="30%">Komentar</th>&nbsp;          
        </tr>
    <?php
        include "koneksi.php";
        //view data mahasiswa di dalam database
        $Lihat="SELECT * FROM bukutamu ORDER BY no";
        $Tampil = mysql_query($Lihat);
        $nomer=0;
        while (    $hasil = mysql_fetch_array ($Tampil)) {
                $id_mahasiswa    = stripslashes ($hasil['no']);
                $nama            = stripslashes ($hasil['nama']);
                $jurusan        = stripslashes ($hasil['email']);
                $alamat            = stripslashes ($hasil['komentar']);
            {
        $nomer++;
    ?>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr align="center" height="40">
            <td><?=$no?><div align="center"></div></td>
            <td><?=$nama?><div align="center"></div></td>
            <td><?=$email?><div align="center"></div></td>
            <td><?=$komentar?><div align="center"></div></td>
        </tr>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    <?php 
            }
        }
    //Tutup koneksi engine MySQL
        mysql_close($Open);
    ?>
    </table>
</body>
</html>