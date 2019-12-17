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
            <p>Informations de passeport</P>
                
        </div>
    </div>
    <form method="POST" action="" class="container_reservation">
        @csrf
   
      <div class="information_reservation">
          <div class="information_reservation__titre">
              <p>{{$nom_client}} {{$prenom_client}}</p>
              

          </div>
          <div class="information_reservation__ligne">
               <select name="nationalite">
                

                  <option value="DZ">Algerienne</option>
                  <option value="FR">France</option>
                  
              </select>

          </div>
          <div class="information_reservation__ligne">
            <input name="numero_passeport" value= {{old('num_passeport') }}>
                <label for="numero_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Numero de passeport</span></label>
            </div>
              <div class="erreur">
                        @if($errors->has('numero_passeport'))
                            <label>{{$errors->first('numero_passeport')}}</label>
                        @endif    
                        </div>
            <div class="information_reservation__ligne">
                <input name="confirmer_numero_passeport" >
                    <label for="confirmer_numero_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Confirmer numero de passeport</span></label>
            </div>
                  <div class="erreur">
                        @if($errors->has('confirmer_numero_passeport'))
                            <label>{{$errors->first('confirmer_numero_passeport')}}</label>
                        @endif    
                        </div>


            <div class="information_reservation__ligne">
                <input type="date" name="date_expiration_passeport" >
                    <label for="date_expiration_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Date d'expiration</span></label>
                </div>
                 <div class="erreur">
                        @if($errors->has('date_expiration_passeport'))
                            <label>{{$errors->first('date_expiration_passeport')}}</label>
                        @endif    
                        </div>
            


                <div class="enregistrement__btns">
                    <a href={{route('/enregistrement/information')}}>  <input type="button" class="" value="Retour"> </a>
                    <a href="">  <input type="submit" class="" value="Suivant"> </a>
                  </div>
                   <div class="erreur">
                         @if (isset($error))
                            <label>{{$error}}</label>
                        @endif    
                        </div>
                  


                    
      </div>

      




    </form>


</body>


<style>

    

</style>
</html>