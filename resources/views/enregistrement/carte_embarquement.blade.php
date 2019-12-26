<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset('reservation.css')}}">
<body>
    <div class="entete__cadre">  
        <div class="entete">
            <p>Carte embarquement</P>
                
        </div>
    </div>

    <div class="container_enregistrement">
            <div class="enregistrement_gauche">
              <div class="enregistrmrnt__tete">
                
    
              

                <div class="enregistrement__titre">
                    <p>Ma carte d'embarquement</p>
                </div>
         
                <div class="enregistrement__details">
                    <p>télécharger la carte d'embarquement...</p>
                </div>
                
            </div>
                <div class="enregistrement__tableau">
                    <div class="tableau__titres">
                        <div class="tableau__titre">Passager</div>
                        <div class="tableau__titre">Action</div>
                    </div>
                    
               
                  
  


                   @foreach($listeEnregistre as $key)
                   
                   

 <div class="tableau__ligne ">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        
                        <div class="tableau__element "><a href="{{route('/enregistrement/carte_embarquement',[$key->num_client,$key->nom_client,$key->prenom_client])}}" class="tableau__button">télécharger</a></div>
                    </div>

               @endforeach
               
                   

                </div>

                

            </div>

            <div class="enregistrement_droite">

           
                
            </div>


    </div>




</body>