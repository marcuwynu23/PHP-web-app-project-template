<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,"tryDB");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Authentication";
$result = mysqli_query($conn,$sql);
echo "Connected successfully";




// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["id"]. " " . $row["username"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

?>