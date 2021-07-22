<!DOCTYPE html>
<html>
<head>
	    <!-- Required meta tags-->
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
	<title>Print data keterangan</title>
    <!-- Main CSS-->
    <link href="css/papper.css" rel="stylesheet" media="all">
</head>
<body>


	<?php 
	include 'koneksi.php';
	?>
	<center>
		<h2>LAPORAN ABSENSI KETERANGAN</h2>
	</center>

	<table border="1" style="width : 100%;">
		<tr>
			<th width="1%">No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Alasan</th>
            <th>Waktu</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_keterangan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['alasan']; ?></td>
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