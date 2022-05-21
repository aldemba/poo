<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\User;

class SecurityController extends Controller{
   
    public function authentification(){

        
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){

            $this->render('security/login.html.php');

        }

        if($this->request->isPost()){

          extract($_POST);
          if(User::findUserByLoginAndPassword($login,$password)!=null){

            //   dd(User::findUserByLoginAndPassword($login,$password));
            dd('ok');
          }
        }

        //2-traitement apres soumission => POST
    }
    public function deconnexion(){

        $this->redirecToRoute("login");
        
    }

}