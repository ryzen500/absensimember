
<?php
include "koneksi.php";
if (isset($_POST['kembalikan'])) {

$nama_file = $_FILES['datafile']['name'];
$ukuran = $_FILES['datafile']['size'];

if ($nama_file == "") {
    echo "Error";
} else {
    $uploaddir = './restore/';
    $alamatfile = $uploaddir . $nama_file;

    if (move_uploaded_file($_FILES['datafile']['tmp_name'], $alamatfile)) {

        $filename = './restore/' . $nama_file . '';

        $templine = '';
        $lines = file($filename);
        foreach ($lines as $line) {
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;

            $templine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysqli_query($koneksi, $templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error($koneksi) . '<br /><br />');
                $templine = '';
            }
        }
        echo "<p>Berhasil Restore Database.</p>";
        echo '<a href="restore_datakaryawan.php">Kembali</a>';
    } else {
        echo "<p>Proses upload gagal, kode error = " . $_FILES['location']['error'] . "</p>";
        echo '<a href="restore_datakaryawan.php.php">Kembali</a>';
    }
}
} else {
unset($_POST['kembalikan']);
}

?>