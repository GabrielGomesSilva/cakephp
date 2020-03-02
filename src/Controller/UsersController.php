<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{

    public function index(){

       // $usuario = "cesar";
       // $teste = "gabriel";
        //$this -> set(['usuarios' => $usuario, 'teste' => $teste ]);
        $usuarios = $this->Users->find()-> all();
        $this->set(['usuarios' => $usuarios]);
    }

}


?>