<?php
$servername = "imedia.in.ua";
$username = "c1imedia";
$password = "sunimedia";
$dbname = "c1imedia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM city WHERE region_id=".$_POST['region']." ORDER BY region_id";
$result = mysqli_query($conn, $sql);
$i=0;
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        $array[$i]['name']=$row["name"];
		
		$sql2 = "SELECT * FROM region WHERE id='".$row["region_id"]."'";
$result2 = mysqli_query($conn, $sql2);
  while($row2 = mysqli_fetch_assoc($result2)) {
        $array[$i]['region']=$row2["name"];
    }
$i++;	
    }
} else {
    echo "0 results";
}

$conn->close();
echo json_encode($array);	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */