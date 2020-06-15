<?php
require_once 'tampilan2.php';

$halamanutama = 7;
$halamanutama1 = count(query("select*from tbl_mhs"));
$halamanutama2 = ceil($halamanutama1 / $halamanutama);
$halamanutama3 = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$halamanutama4 = ($halamanutama * $halamanutama3) - $halamanutama;

$data = query("select*from tbl_mhs LIMIT $halamanutama4, $halamanutama");

?>

<html>

<head>
	<title>Menyimpan Data</title>
</head>

<body>
	<a href="tambah.php">Tambah Data</a>
	<form action="cari.php" method="get">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>NIM</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Job Date</th>
				<th>Age</th>
				<th>pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $row) : ?>
				<tr>
					<td><?= $row['nim'] ?></td>
					<td><?= $row['firstname'] ?></td>
					<td><?= $row['lastname'] ?></td>
					<td><?= $row['job_date'] ?></td>
					<td><?= $row['age'] ?></td>
					<td><a href="edit.php?nim_mhs=<?= $row['nim']; ?>">Edit</a>
						<a href="hapus_tampilan.php?nim=<?= $row['nim']; ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php if ($halamanutama3 > 1) : ?>
		<a href="?halaman=<?php echo  $halamanutama3 - 1; ?>">
			<< </a> <?php endif; ?> <?php for ($i = 1; $i <= $halamanutama2; $i++) : ?> <?php if ($i == $halamanutama3) : ?> <a href -?"halaman-<?php echo $i; ?>" style="font-weight: bold; color: blue;" <?php echo $i; ?></a> <?php else : ?> <a href="?halaman<?php echo  $i; ?>"><?php echo  $i; ?>
		</a>
	<?php endif; ?>
<?php endfor; ?>

<?php if ($halamanutama3 < $halamanutama2) : ?>
	<a href="?halaman=<?php echo $halamanutama3 + 1; ?>"> >> </a>
<?php endif; ?>
</body>

</html>