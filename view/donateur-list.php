<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste Donateur</title>
        <link rel="stylesheet" href="../styles/style.css">
    </head>


    <body>
        <div class="header">
            <a  class="acceuil" href = "../donateur"> Acceuil</a>
        </div>

        <div class="container-page page--list">
            <div class="container--donateurs">
            
                <h1>La liste des Donateurs</h1>            
                <div class='container-info'> 
                    {% for donateur in donateurs %}

                        <h3>  Nom - Prénom : {{donateur.nom}} {{donateur.prenom}}</h3>

                        <p> Adresse : {{donateur.adresse}}  </p> 

                        <div class="btn" >                          

                          <a href="../don/create/{{donateur.idDonateur}}" >ajouter un don</a>
                        
                        </div>
                        
                        <div class="btn">
                        <a href="../donateur/edit/{{donateur.idDonateur}}" >Modifier  les information de donateur</a>
                        </div>

                        <form class="btn" method = "post" action =" ../donateur/delete/">

                          <input type="hidden" value="{{donateur.idDonateur}}" name = "idDonateur"> 
                          <input type="submit" value="Supprimer" class="delete-style"> 
                        
                        </form>
                    {% endfor %}  
                </div>
            </div>
        </div> 
    </body>
</html>