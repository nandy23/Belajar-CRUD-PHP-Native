<?php
include 'tampilan2.php';
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<a href='tampilan.php'>Kembali</a>";
    echo "<br>";
    echo "<b>Hasil pencarian : " . $cari . "</b>";
    $data = mysqli_query($db, "select * from tbl_mhs where firstname like '%" . $cari . "%'");
} else {
    $data = mysqli_query($db, "select * from tbl_mhs");
}
?>

<table border="1">
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
        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['firstname'] ?></td>
                <td><?= $row['lastname'] ?></td>
                <td><?= $row['job_date'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><a href="form-edit.php?nim=<?= $row['nim']; ?>">Edit</a>
                    <a href="hapus_tampilan.php?nim=<?= $row['nim']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>