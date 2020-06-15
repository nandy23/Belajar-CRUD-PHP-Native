<?php
require_once 'tampilan2.php';
$nim   = $_GET['nim'];
// var_dump($nim);
// exit;
$query = "DELETE FROM tbl_mhs where nim=" . $nim;
// var_dump($query);
// exit;
if (mysqli_query($db, $query)) {
    header("location:tampilan.php");
} else {
    echo "error bos";
}
