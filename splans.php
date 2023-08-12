<!DOCTYPE HTML>
<html>
	<head>
		<title>Study Plans</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">
				<div id="main">
					<div class="inner"><h1>All Study Plans</h1>
						<div class="col-6 col-12-xsmall">
        <a href="admin.php" class="btn btn-danger ml-3">Back to Admin Page</a>
    </div> <br>
<div class="table-wrapper">
<?php 
require_once "config.php";
$sql = "SELECT planname, planlevel, planhours, planstatus FROM splans";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Plan Name</th><th>Plan level</th><th>Plan Hours</th><th>Plan Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["planname"]. "</td><td>" . $row["planlevel"]. "</td><td> " . $row["planhours"]. "</td><td>" . $row["planstatus"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div></div></div></div> </body></html>