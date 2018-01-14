<?php
    include "koneksi.php";
    //Kirimkan Variabel
    $no    = $_POST['no'];
    $nama            = $_POST['nama'];
    $email        = $_POST['email'];
    $komentar            = $_POST['komentar'];
    //validasi id mahasiswa dalam database
    $cek=mysql_num_rows (mysql_query("SELECT no FROM bukutamu WHERE no='$_POST[no]'"));
    if ($cek > 0) {
    ?>
        <script language="JavaScript">
            alert('NO sudah dipakai !, silahkan diulang kembali');
            document.location='index.php';
        </script>
    <?php
    }
    //input data ke table mahasiswa dalam database akademik
    $input    ="INSERT INTO bukutamu (no, nama, email, komentar)
            VALUES ('$no','$nama','$email','$komentar')";
    $query_input =mysql_query($input);
        if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
            alert('Komentar Berhasil diinput!');
            document.location='index.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Komentar Gagal diinput, Silahkan diulangi!";
    }
    //Tutup koneksi engine MySQL
    mysql_close($Open);
?>