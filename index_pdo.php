<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','root');
//var_dump($bdd);
$reponse = $bdd->query('SELECT * FROM mes_chaussettes');
//var_dump($reponse);
while($donnees = $reponse->fetch())
{
//var_dump($donnees);
?>
<p>
Table :  <?php echo $donnees['id'];?> <br />
    pointure : <?php echo $donnees['pointure']; ?>,
    et  la couleur <?php echo $donnees['couleur']; ?> <br />
    Description : <?php echo $donnees['description']; ?> <br />
    Date lavage : <?php echo $donnees['date_lavage']; ?> <br />
    </p>
    <?php
}
$reponse->closeCursor(); 

?>