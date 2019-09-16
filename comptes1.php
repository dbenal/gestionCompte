
<?php
if (isset ($_GET['idc'])) {

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

$sql = "SELECT id, numCompte, solde, idclient FROM cmptes where idclient= " .$_GET['idc'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["id"]. " " . $row["numCompte"]. " "  . $row["solde"] . "<a href=\"http://localhost/listetransaction.php?idcompte=" . $row["id"] ."\" > voir la liste des transactions </a> <br>";;
    }
    
} else {
    echo "ce client n'existe pas ";
}
$conn->close();
}
else
    echo "utilisation de scripte est incorrecte";

?>
