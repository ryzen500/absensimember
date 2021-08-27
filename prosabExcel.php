<html>

<head>
    <title> Absen Kehadiran</title>
</head>


<body>

    <?php

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Absensi" . date('Y-m-d') . ".xls");

    include "koneksi.php";
    echo "<h1>Data Absensi</h1>";

    $sql = "SELECT * FROM tb_absen";
    if ($result = $koneksi->query($sql)) {
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Id</th>";
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
</body>

</html>