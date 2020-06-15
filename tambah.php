<?php
include 'tampilan2.php';

if ($_POST) {
    // menangkap data yang di kirim dari form
    $nim = $_POST['nim'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $job_date = $_POST['job_date'];
    $age = $_POST['age'];

    // menginput data ke database
    mysqli_query($db, "insert into tbl_mhs values('$nim','$firstname','$lastname','$job_date','$age')");

    header("location:tampilan.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>tambah</title>
</head>

<body>

    <h2>Tambah Data Mahasiswa</h2>
    <br />
    <a href="tampilan.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah.php">
        <table>
            <tr>
                <td>Nim</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Firtsname</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <td>Job Date</td>
                <td><input type="text" name="job_date" placeholder="2020-04-16"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>