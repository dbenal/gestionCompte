<?php
$nom= $_POST["nom"];
$date= $_POST["dn"];
$link = mysqli_connect("localhost", "root", "", "gestioncomptebancaire");
mysqli_query($link, "INSERT INTO client values(0,'$nom','$date')");
//$db = mysqli_connect("localhost", "root", "")  or die('Erreur de connexion '.mysqli_error());
//mysqli_select_db('projet',$db)  or die('Erreur de selection '.mysqli_error());

// on écrit la requête sql
$sql = "INSERT INTO client VALUES(0,'$nom','$date')";
echo $sql;

// on insère les informations du formulaire dans la table
//mysqli_query($sql);

// on affiche le résultat pour le visiteur
//echo 'Vos infos ont été ajoutées.';

//mysqli_close();
?>;