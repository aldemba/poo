<?php
//inclusion du fichier  de la classe
//composer à faisant l'autoloading
use App\Model\Professeur;


require("../vendor/autoload.php");
require_once("../routes/route.web.php");
// require_once("../core/fonction.php");


// require_once("../models/User.php");
// require_once("../models/AC.php");
// require_once("../models/Inscription.php");

// $ac=new AC();
// $ac->setNomComplet("limzo FAYE");
// $ac->setPassword("zo");
// $ac->insert();
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(E_ALL);



$pers=new Professeur();
$pers->setNomComplet("salla ba mbaye");
$pers->setGrade("Ingenieur");
// $pers->insert();
// $personne->setRole("ROLE_PROFESSEUR");

// echo Personne::table();//Personne => table personne
// echo User::table();//User => personne
// echo RP::table();//RP => personne

//Composer est utilisé pour de l'autoloading


//  Personne::findAll();//select * from Personne
//  Professeur::findAll(); 
//Composer => Outils de gestionnaire de dependance
//  AC::findAll();


// User::finAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"
// AC::findAll();
//select * from Personne where role not like "ROLE_AC"
// Professeur::findAll();
//select * from Personne where role not like "ROLE_PROFESSEUR"