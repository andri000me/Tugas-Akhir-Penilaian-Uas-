<html>
<head>
    <title>Input Data ke Database dengan PHP dan MySQL</title>
</head>
<body>
    <form action="action_input.php" method="POST" enctype="multipart/form-data">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="40">&nbsp;</td>
            <td>&nbsp;</td>
            <td><font size="4" color="blue"><b>Kritik dan Saran </b></font></td>
        </tr>
        <tr>
            <td height="36"></td>
            <td><a href="view_data.php" target="showframe" style="text-decoration:none">View Data</a></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>NO</td>
            <td><input type="text" name="no" size="12"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Email</td>
            <td><input type="email" name="email" size="30"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Komentar</td>
            <td><input type="text" name="komentar" size="60"></td>
        </tr>
        <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" name="reset" value="Reset"></td>
        </tr>
        </table>
    </form>
</body>
</html>