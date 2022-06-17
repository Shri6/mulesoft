<?php
    session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$mname = dataFilter($_POST['mname']);
	$aname = dataFilter($_POST['aname']);
	$asname = dataFilter($_POST['asname']);
	$myear = dataFilter($_POST['myear']);
    $dname = dataFilter($_POST['dname']);

}

require '../db.php';

$sql = "INSERT INTO movie (mov_name, act_name, actrs_name, years, dir_name)
    			VALUES ('$mname','$aname','$asname','$myear','$dname')";
mysqli_query($conn, $sql);
header("location: ../insert.php");

function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}

?>
