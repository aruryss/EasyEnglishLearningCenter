<!DOCTYPE HTML>
<html>
	<head>
		<title>Student-Course</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">
				<div id="main">
					<div class="inner"><h1>All Students Attending Courses</h1>
						<div class="col-6 col-12-xsmall">
        <a href="admin.php" class="btn btn-danger ml-3">Back to Admin Page</a>
    </div> <br>
<div class="table-wrapper">
<?php 
require_once "config.php";
$sql = "SELECT courses.courseid, users.name , users.surname, users.phonenumber,  splans.planname , splans.planlevel
FROM (( courses INNER JOIN users ON users.id = courses.id) INNER JOIN splans ON splans.planid = courses.planid) ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Course ID</th><th>Student's Name</th><th>Student's Phone number</th><th>Course Name</th><th>Course Level</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["courseid"]. "</td><td>" . $row["name"]. " " . $row["surname"] . "</td><td> " . $row["phonenumber"]. "</td><td>" . $row["planname"]. "</td><td>" . $row["planlevel"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "There are no students attending courses!";
}
$conn->close();
?>
</div></div></div></div> </body></html>