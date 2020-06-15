<?php
$db = mysqli_connect("localhost", "root", "", "mahasiswa");

$query = "select * from mahasiswa";

$query = mysqli_query($db, $query);
$rows = [];
//var_dump(mysqli_fetch_assoc($query));
while ($row = mysqli_fetch_assoc($query)) {
	$rows[] = $row;
}

var_dump($rows);
exit;


function query($query)
{
	global $db;

	$result = mysqli_query($db, $query);
	$rows = [];
	if ($result)

		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	return $rows;
}
