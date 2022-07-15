<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire don</title>
    <link rel="stylesheet" href="{{path}}styles/style.css">
</head>
  <body>

    <div class="header">
      <a  class="acceuil"href = "{{path}}donateur/list"> Liste des donateurs </a>
    </div>

    <div class="container-page">

      <div class="container">
        <div class="container-close">&times;</div>
        <img  src="{{path}}images/image3.jpg" alt="image">
        
      
        <div class="container-text">
          <h2> Ajouter un don  </h2>
          {% if errors is defined %}       
              <span class="error"> {{ errors|raw }}</span>
          {% endif %}
            <form action="{{path}}don/store" method="post">
              
                    <label for="date" >Date </label>
                        <input  class="input" type="date" name="date" value="{{ don.date }}" > 
             
                    <label for="montant" >Montant </label>
                        <input  class="input" type="numeric"  name="montant" value="{{ don.montant }}" >

                    <label for="association">Sélectionner une Association:</label>
                       
                        <select class="input select"  name="association_idAssociation">
                        {% for association in associations %}  
                            <option value="{{association.idAssociation}}"  {% if association.idAssociation==don.association_idAssociation %} selected {% endif %}> {{association.nomAssociation}}</option>
                        {% endfor %}                         
                        </select>
                        
                        <input type="hidden" name="idDonateur"  value="{{ donateur.idDonateur }} ">
                        
                       

                <button type="submit">Ajouter</button>
            </form>
        </div>
      </div>
    </div>



  </body>
</html>