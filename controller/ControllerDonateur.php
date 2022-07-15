<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('Donateur');
RequirePage::requireModel('Association');
RequirePage::requireLibrary('Validation');


class ControllerDonateur{

    public function index(){

        return Twig::render('home-index.php');
    }

    public function list(){

        $donateur = new ModelDonateur;
        $select = $donateur->select(); 
        return Twig::render('donateur-list.php', ['donateurs'=> $select]);

    }

    public function create(){ 

        return Twig::render('donateur-insert.php',['' =>'' ]);       
    }

    public function store(){
        
       $validation = new Validation; 
        

        extract($_POST); 
              
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('prenom')->value($prenom)->pattern('alpha')->required()->max(45);
        $validation->name('adresse')->value($adresse)->pattern('email')->required()->max(45);
       

        if($validation->isSuccess()){           
          
            $donateur= new ModelDonateur;
            $insert = $donateur->insert($_POST);
            
            RequirePage::redirect('donateur/list'); 

        }else{      
            
            $errors = $validation->displayErrors();
            return Twig::render('donateur-insert.php', ['errors'=> $errors]);
        }

            
    }
   
    public function edit($value){
        $donateur = new ModelDonateur;
        $selectId =  $donateur->selectId($value);

        return Twig::render('donateur-edit.php', ['donateur' => $selectId]);


    }

    public function update (){

        $validation = new Validation; 
        
        extract($_POST); 
              
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('prenom')->value($prenom)->pattern('alpha')->required()->max(45);
        $validation->name('adresse')->value($adresse)->pattern('email')->required()->max(45);
       

        if($validation->isSuccess()){           
            
            $donateur= new ModelDonateur;
            
            $update = $donateur->update($_POST);
           
            RequirePage::redirect('donateur/list'); 

        }else{      
            
            $errors = $validation->displayErrors();
            return Twig::render('donateur-edit.php', ['errors'=> $errors, 'donateur' => $_POST]);
        }
    }

    public function delete(){

        $donateur = new ModelDonateur;
        $donateur = $donateur->delete($_POST); 
        RequirePage::redirect('donateur/list');

    }
}

?>