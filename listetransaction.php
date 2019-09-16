<?php
if (isset ($_GET['idcompte'])) {

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

    $sql = "SELECT id, type, date, montant FROM transaction where idcompte= " .$_GET['idcompte'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo  $row["id"]. " " . $row["type"]. " "  . $row["montant"] . "<br>";
        }

    } else {
        echo "ce client n'existe pas ";
    }
    $conn->close();
}
else
    echo "utilisation de scripte est incorrecte";

?>
