<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$e="SELECT id FROM complainregister";
$result = $conn->query($e);
while($row = $result->fetch_assoc()){
	$i = $row["id"];
}
echo $i;
$sql = "UPDATE complainregister SET problemDescription='Need of Mosquito repallant' WHERE id='".$i."'";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);

?>