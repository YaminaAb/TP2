<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier donateur</title>
    <link rel="stylesheet" href="{{path}}styles/style.css">
</head>
    <body>

        <div class="header">
            <a  class="acceuil"href = "{{path}}donateur/list"> Liste des donateurs </a>
        </div>

        <div class="container-page">
            <div class="container">
                <div class="container-close">&times;</div>
                <img  src="{{path}}images/image2.jpg" alt="image">
            
            
                <div class="container-text">
                    <h2>Modiffier le donateur </h2>
                    {% if errors is defined %}       
                        <span class="error"> {{ errors|raw }}</span>
                    {% endif %}
                    <form action="{{path}}donateur/update" method="post">
                        
                    
                        <input class="input" type="text" name="nom"  value="{{donateur.nom}}">
                        <input class="input" type="hidden" name="idDonateur"  value="{{donateur.idDonateur}}">
                    
                    
                        <input class="input" type="text" name="prenom"   value="{{donateur.prenom}}">

                        
                        <input class="input" type="email" name="adresse"    value="{{donateur.adresse}}">
                        

                        <button type="submit">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    
    
    </body>
</html>