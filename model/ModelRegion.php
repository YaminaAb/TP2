<?php


class ModelDonateur extends CRUD {

    protected $table = "region";      
    protected $primaryKey = "idRegion";
    
    protected $fillable = ['nom'];
}


?>