<?php 
require "vendor/autoload.php";
ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
$chaussettes = ORM::for_table('mes_chaussettes')->where('couleur', 'rouge')->find_many();
//Mettre la condition pour afficher la couleur rouge 
foreach($chaussettes as $chaussette){

	echo $chaussette->id.'<br>';
	echo $chaussette->couleu = 'rose'.'<br>';
	echo $chaussette->save();
}
$pointure = ORM::for_table('mes_chaussettes')->where('pointure','40')->find_many();
foreach ($pointure as $key) {
	echo $key->pointure.'<br>';
}
