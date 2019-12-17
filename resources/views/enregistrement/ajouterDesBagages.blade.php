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
            <p>Bagage supplémentaire</P>
                
        </div>
    </div>
  
    <form method="POST" action={{"/enregistrement/informations/bagage"}} class="container_bagages">
        @csrf

        <div class="information_reservation__titre">
            <p>{{$nom_client}} {{$prenom_client}}</p>
            
    
        </div>

     <div class="bagages__ligne">


         <div class="bagage__element">
             <div class="bagage__photo">
                <img src="{{ asset('images/main.png')}}">
             </div>
             <div class="bagage__details">

                     Bagage a main
             </div>
             <div class="bagage__quant">
                 1X

            </div>
         </div>


    
        <div class="bagage__element">
            <div class="bagage__photo">
               <img src="{{asset('images/accessoire.png')}}">
            </div>
            <div class="bagage__details">

                    Accessoire
            </div>
            <div class="bagage__quant">
                1X

           </div>
        </div>


   
        <div class="bagage__element">
            <div class="bagage__photo">
               <img src="{{asset('images/soute.png')}}" >
            </div>
            <div class="bagage__details">

                    Bagage en soute
            </div>
            <div class="bagage__quant">
                    <input id="" name="num_client" type="hidden" value={{$num_client}}>
                   <input type="button" onclick="decrementValue()" value="-" />
               
                <input id='nbBagage' type="text" name='nb_bagage_soute' value="0" >
                <input type="button" onclick="incrementValue()" value="+" />
           </div>
        </div>
    
    </div>

    </div>

         <div class="bagage__tarif">
             Tarif supplementaire: <input type="text"  name="prix" id="lePrix" value="0"> DA
         </div>
         <div class="enregistrement__btns">
            
            <a >  <input type="submit" class="" value="Suivant"> </a>
      
          </div>

    </form>


</body>

<script>
        function incrementValue()
        {
            var nbBagage_id = document.getElementById('nbBagage')
            var value = parseInt(nbBagage_id.value, 9); 

            // if NaN, set to 0, else, keep the current value
            value = isNaN(value) ? 0 : value;
            value++;
            nbBagage_id.value = value;
            
            nbr = nbBagage.value;
	        lePrix.value = nbr * 200;

            nbBagage = document.querySelector('#nbBagage');
            lePrix = document.querySelector('#lePrix');
        }

        function decrementValue()
        {
            var nbBagage_id = document.getElementById('nbBagage')
            var value = parseInt(nbBagage_id.value, 9); 

            // if NaN, set to 0, else, keep the current value
            value = isNaN(value) ? 0 : value;
            value--;
            if (value < 0) {
            value = 0;
        }
        
        nbBagage_id.value = value;  


            nbr = nbBagage.value;
	        lePrix.value = nbr * 50;

            nbBagage = document.querySelector('#nbBagage');
            lePrix = document.querySelector('#lePrix');
        }


</script>
</html>