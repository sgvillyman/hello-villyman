<?php
//json header
header('Content-Type: application/json');
//connection string
$conn = mysqli_connect("localhost","root","","help_db");
//sql query
$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

$result = mysqli_query($conn,$sqlQuery);
//fetch from database
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
