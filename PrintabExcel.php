<html>

<head>
    <title>Absensi Kehadiran</title>
</head>

<body>
    <?php

    include "koneksi.php";
    echo "<h1>Data Absensi</h1>";

    $sql = "SELECT * FROM tb_absen";
    if ($result = $koneksi->query($sql)) {
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Id_karyawan</th>";
            echo "<th>Nama</th>";
            echo "<th>Waktu</th>";
            echo "</tr>";
            while ($row = $result->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['id_karyawan'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['waktu'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else {
            echo "Data tidak tersedia.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . $koneksi->error;
    }

    $koneksi->close();
    ?>
    <br><br>
    <a href="prosabExcel.php">Export to Excel</a><br>
    <a href="Printab.php">Print</a><br>
    <a href="data_absen.php">Kembali</a>
</body>

</html>