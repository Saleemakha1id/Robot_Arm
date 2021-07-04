<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";

// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql1 = "SELECT id,engine1,engine2,engine3,engine4,engine5,engine6 FROM run ";
$query = mysqli_query($conn,$sql1);
while($fetch = mysqli_fetch_assoc($query))
  {
    echo "id: ".$fetch['id'] ."<br>";
    echo "Motor #1: ".$fetch['engine1'] ."<br>";
    echo "Motor #2: ".$fetch['engine2'] ."<br>";
    echo "Motor #3: ".$fetch['engine3'] ."<br>";
    echo "Motor #4: ".$fetch['engine4'] ."<br>";
    echo "Motor #5: ".$fetch['engine5'] ."<br>";
    echo "Motor #6: ".$fetch['engine6'] ."<br>";
    echo "<br>";
    }

mysqli_close($conn);
?>