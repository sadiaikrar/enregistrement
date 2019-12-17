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
            <p>Enregistrement</P>
                
        </div>
    </div>

    <div class="container_enregistrement">
            <div class="enregistrement_gauche">
              <div class="enregistrmrnt__tete">
                
    
                <div class="enregistrement__etat">
                    <div class="enregistrement__cercle ">1</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle enregistrement__cercle--actif">2</div>
                    <div class="enregistrement__ligne"></div>
                    <div class="enregistrement__cercle">3</div>


                </div>

                <div class="enregistrement__titre">
                    <p>Bagages</p>
                </div>
         
                <div class="enregistrement__details">
                    <p>Veuillez confirmer...</p>
                </div>
                
            </div>
                <div class="enregistrement__tableau">
                    <div class="tableau__titres">
                        <div class="tableau__titre">Passager</div>
                        <div class="tableau__titre">Bagages</div>
                        <div class="tableau__titre">Action</div>
                    </div>
                    
               
                  
  


                    @foreach ($listeEnregistre as $key )
                   
                   @if(in_array ( $key->num_client, $bagage_exist ) )
<div class="tableau__ligne tableau__ligne--pair">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        <div class="tableau__element">1 bagage a main, 1 accessoire	</div>
                        <div class="tableau__element "></div>
                    </div>
                   @else
 <div class="tableau__ligne ">
                        <div class="tableau__element">{{$key->nom_client}} {{$key->prenom_client}}</div>
                        <div class="tableau__element">1 bagage a main, 1 accessoire	</div>
                        <div class="tableau__element "><a href="{{route('/enregistrement/ajouterDesBagages',[$key->num_client,$key->nom_client,$key->prenom_client])}}" class="tableau__button">Ajouter</a></div>
                    </div>
@endif
               @endforeach
               
                    <div class="enregistrement__btns">
                      <a href={{route('/enregistrement/information')}}>  <input type="button" class="" value="Retour"> </a>
                     
                    
                   
                   @if(array_intersect ( $client_exist, $bagage_exist )== $client_exist )

                      <a href={{route('/enregistrement/siège')}}>  <input type="button" class="" value="Suivant"> </a>
                @endif
               
                    </div>

                </div>

                

            </div>

            <div class="enregistrement_droite">

           
                
            </div>


    </div>




</body>