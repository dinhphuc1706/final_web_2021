<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retail test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM retail";
$result = $conn->query($sql);


    // $$data2 = array(); 
    // if ($result->num_rows > 0) { 
    // while ($row = $result->fetch_assoc()) { 
    // array_push($data2, [$row['Salary']]); 
    // }
    // }
    // echo json_encode($data2); 

    while($row = mysqli_fetch_assoc($result)) {
        $asalary[] = $row['Salary'];
        }
         echo '
         <script type="text/javascript">    
          var getaSalary = '.json_encode($asalary, JSON_NUMERIC_CHECK ).';
         </script>
        ';
?>
