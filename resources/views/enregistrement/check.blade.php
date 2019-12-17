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
                <form action="/enregistrement" method="post">
                    @csrf
                    <div class="information_reservation__titre">
                        <p>Pret pour l'enregistrement ?</p>
                    </div>
                    <div class="information_reservation__ligne">
                        <input type="text" name="reference_reservation"  value= {{old('reference_reservation') }} >
                     <label for="reference_reservation" class="information_reservation__label"><span class="information_reservation__contenue">Référence de reservation</span></label>
                     
                    </div>
                    <div class="erreur">
                        @if($errors->has('reference_reservation'))
                            <label>{{$errors->first('reference_reservation')}}</label>
                        @endif    
                        </div>

                    <div class="information_reservation__ligne">
                        <input type="text" name="nom_client"  value= {{old('nom_client') }} >
                        
                        <label for="nom" class="information_reservation__label"><span class="information_reservation__contenue">Nom de passeger</span></label>
                    </div>
                    <div class="erreur">
                        @if($errors->has('nom_client'))
                            <label>{{$errors->first('nom_client')}}</label>
                        @endif    
                        </div>

                    <div class="enregistrement__validation">
                        <input type="submit" name="submit" class="enregistrement__btn">
                        
                    </div>
                     <div class="erreur">
                         @if (isset($error))
                            <label>{{$error}}</label>
                        @endif    
                        </div>

                    </form>


            </div>

            <div class="enregistrement_droite">


                
            </div>


    </div>




</body>