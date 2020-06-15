<?php
include 'tampilan2.php';
//if (isset($_GET)) {
//}
//var_dump($_GET['nim']);
$Nim_1 = $_GET['nim_mhs'];
if ($_POST) {
    // menangkap data yang di kirim dari form
    $nim = $_POST['nim'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $job_date = $_POST['job_date'];
    $age = $_POST['age'];

    // menginput data ke database
    $query = mysqli_query($db, "update tbl_mhs set nim='$nim', firstname='$firstname', lastname='$lastname',job_date='$job_date', age='$age' where nim='$Nim_1'");
    header("location:tampilan.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>

    <h2>Edit Data Mahasiswa</h2>
    <br />
    <a href="tampilan.php">KEMBALI</a>
    <br />
    <?php
    $Nim_1 = $_GET['nim_mhs'];
    $data = mysqli_query($db, "select * from tbl_mhs where nim='$Nim_1'");
    while ($d = mysqli_fetch_assoc($data)) {
    ?>
        <h3>EDIT DATA MAHASISWA</h3>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Nim</td>
                    <td><input type="number" name="nim" value="<?= $d['nim']; ?>"></td>
                </tr>
                <tr>
                    <td>Firtsname</td>
                    <td><input type="text" name="firstname" value="<?= $d['firstname']; ?>"></td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td><input type=" text" name="lastname" value="<?= $d['lastname']; ?>"></td>
                </tr>
                <tr>
                    <td>Job Date</td>
                    <td><input type=" text" name="job_date" value="<?= $d['job_date']; ?>"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type=" text" name="age" value="<?= $d['age']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>