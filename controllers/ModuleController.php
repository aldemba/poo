<?php
namespace App\Controller;
use App\Core\Controller;
class ModuleController extends Controller{

    public function affecterModule(){

    }

    public function listermodule(){
        if($this->request->isGet()){   
            $this->render('module/listerModule.html.php');
        }
    }


}