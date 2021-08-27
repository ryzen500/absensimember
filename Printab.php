<!DOCTYPE html>
<html>
<head>
	    <!-- Required meta tags-->
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
	<title>Print data Absensi</title>
    <!-- Main CSS-->
    <link href="css/papper.css" rel="stylesheet" media="all">
</head>
<body>


	<?php 
	include 'koneksi.php';
	?>

	<div style="text-align: right; margin: 30px 0 0 8px;"><?php
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-Y H:i:s');?></div>

	<div style="text-align:justify; font-weight:bold; font-size:24px; padding: 40px 40px;">
	<img src="img/logo.jpeg"  style="float:left; width:135px; height:90px; margin: -30px 15px 20px 0;" />
	LAPORAN KEHADIRAN ABSENSI</div>

	<table border="1" style="width : 100%;">
		<tr>
			<th width="1%">No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Waktu</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_absen");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_karyawan']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['waktu']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>
</body>
</html>