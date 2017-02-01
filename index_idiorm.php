<?php 
require "vendor/autoload.php";
ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
$chaussettes = ORM::for_table('mes_chaussettes')->where('couleur', 'rouge')->find_many();
//Mettre la condition pour afficher la couleur rouge 
foreach($chaussettes as $mesChaussettes){
	echo $mesChaussettes->id.'<br>';
	echo $
}
//var_dump($chaussettes);


 ?>