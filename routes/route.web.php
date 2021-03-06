<?php

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;


use App\Exception\RouteNotFoundException;

$router=new Router();

$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/lister-classe',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personne',[PersonneController::class,"lister"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/addlist',[ProfesseurController::class,"addListProfesseur"]);
$router->route('/lister-module',[ModuleController::class,"listermodule"]);





// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }