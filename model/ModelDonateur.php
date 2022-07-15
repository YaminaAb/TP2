<?php



class ModelDonateur extends CRUD {

    protected $table = "donateur";      
    protected $primaryKey = "idDonateur";
    
    protected $fillable = ['nom','prenom', 'adresse'];
}


?>