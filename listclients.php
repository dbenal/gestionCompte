<html>
<head> </head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestioncomptebancaire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo    $row["nom"] ."  " ."<a href=\"http://localhost/comptes1.php?idc= " . $row["id"] ."\" > liste des comptes</a> <br>";
        //echo "id: " . $row["id"]. " - nom:.  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
