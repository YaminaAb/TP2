<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire donateur</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
  <body>

    <div class="header">
      <a  class="acceuil"href = "../donateur/list"> Liste des donateurs </a>
    </div>

    <div class="container-page">

      <div class="container">
        <div class="container-close">&times;</div>
        <img  src="{{path}}images/image1.jpg" alt="image">
        
      
        <div class="container-text">
          <h2>Pour Ajouter un don veuillez vous inscrire </h2>
          {% if errors is defined %}       
              <span class="error"> {{ errors|raw }}</span>
          {% endif %}
            <form action="../donateur/store" method="post">
              
            
                <input class="input" type="text" name="nom" placeholder=" Nom" value ="{{donateur.nom}}" >
            
            
                <input class="input" type="text" name="prenom"  placeholder="Prénom" value ="{{donateur.prenom}}" >

                
                <input class="input" type="email" name="adresse"   placeholder="Courriel" value ="{{donateur.adresse}}" >
              

                <button type="submit">Ajouter</button>
            </form>
        </div>
      </div>
    </div>



  </body>
</html>