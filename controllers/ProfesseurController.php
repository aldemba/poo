<?php
namespace App\controller;
use App\Core\Controller;
class ProfesseurController extends Controller{

    public function affecterClasse(){

    }
    public function listerProfesseur(){
        
        if($this->request->isGet()){   
            $this->render('professeur/listerProfesseur.html.php');
        }

    }
    public function addListProfesseur(){
        
        if($this->request->isGet()){   
            $this->render('professeur/listerProfesseur.html.php');
        }
        else{
            // dd($_POST);
        }

    }


}