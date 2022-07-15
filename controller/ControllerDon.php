<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('Don');
RequirePage::requireModel('Association');
RequirePage::requireModel('Donateur');
RequirePage::requireLibrary('Validation');


class ControllerDon{    

    public function create($value){ 

        $association = new ModelAssociation;
        $association =  $association->select('nomAssociation');

        $donateur = new ModelDonateur;
        $selectId =  $donateur->selectId($value);
        
        return Twig::render('don-insert.php',['associations' => $association,'donateur' => $selectId]);       
    }

    public function store(){
       
        $validation = new Validation; 
        extract($_POST);                     
        
        $validation->name('date')->value($date)->pattern('date_ymd')->required();
        $validation->name('montant')->value($montant)->pattern('int')->required()->max(11);
        $validation->name('association_idAssociation')->value($association_idAssociation)->pattern('int')->required();
           
       

        if($validation->isSuccess()){           
          
            $don= new ModelDon;
            
            $insert = $don->insert($_POST);
            RequirePage::redirect('donateur/list'); 

        }else{ 
            
            $association = new ModelAssociation;
            $association =  $association->select('nomAssociation');
            
            $errors = $validation->displayErrors();

            return Twig::render('don-insert.php', ['errors'=> $errors, 'associations' => $association, 'don' => $_POST, 'donateur'=> $_POST]);
        }   

            
    }

   
   

    

 
}

?>