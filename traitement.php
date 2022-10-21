<?php

include "index.html";

$massar= (string)htmlspecialchars($_POST['massar']);
$nom= htmlspecialchars($_POST['nom']);
$prenom= htmlspecialchars($_POST['prenom']);
$datedenaissance= htmlspecialchars($_POST['datedenaissance']);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "lycee");
$result = $mysqli->query('SELECT eleves.mpasse FROM eleves where eleves.massar="'.$massar.'" and eleves.nom="'.$nom.'" and eleves.prenom="'.$prenom.'" and eleves.datedenaissance="'.$datedenaissance.'"');
$data = $result->fetch_assoc();
echo'<h3><center><font color="green">';
echo'<fieldset style="width:15%;background-color:#FFF5EE;">';
echo '<p>votre mot de passe est:</p>';
echo $data['mpasse'];
echo'</fieldset>';
?>