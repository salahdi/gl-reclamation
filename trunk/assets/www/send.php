<?php


$sujet=$_GET['param1'];
$cont=$_GET['param2'];
// paramètre du seveur de BD
$host="mysql5.000webhost.com";
$user="a2398709_seif";
$pwd="2armydefense";
$nomDB="a2398709_seif";

//établissement du lien de cnx entre le serveur de BD et le serveur Web
$lien=mysql_connect($host,$user,$pwd) or die ("connexion impossible");
mysql_select_db($nomDB, $lien);


//preparation de la requete
$requete="INSERT INTO reclamationmob VALUES  ('','$sujet','$cont')";
//récupération d'un flux provenant de la base de donnée (sous format d'une matrice)
$resultat =mysql_query($requete);
echo 'Reclamation envoyee';
/*
$requete="SELECT * FROM `etudiant`" ;

$resultat=mysql_query($requete);
?>
<table border="2">
<tr><td>id</td><td>nom</td><td>Prenom</td><td>Classe</td></tr>
<?php
while ($data= mysql_fetch_array($resultat))
{
	?>
    <tr>
    
	<?php
    echo "<td>  ".$data['id']."</td>";
	echo "<td>  ".$data['nom']."</td>";
	echo "<td>  ".$data['prenom']."</td>";
	echo "<td>  ".$data['classe']."</td>";
	?>
    </tr>
    <?php
}
*/
?>

