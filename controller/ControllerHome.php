<?php
class ControllerHome{

    public function index(){
        
        return Twig::render('home-index.php',['' => '']);

    }


    public function erreur(){
        return Twig::render('erreur-page.php');        
    }
  
}

?>