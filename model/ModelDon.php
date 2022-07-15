<?php



class ModelDon extends CRUD {

    protected $table = "don";       
    protected $primaryKey = "idDon";
    
    protected $fillable = ['date','montant', 'idDonateur', 'association_idAssociation'];
}


?>