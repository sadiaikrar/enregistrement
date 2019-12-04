<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <h2>Ajouter des bagages</h2>
    <h4>{{$nom_client}} {{$prenom_client}}</h4> 
    <form method="POST" action={{"/enregistrement/informations/bagage"}}>

    @csrf
        <div>
            <img src="" alt="image bagage a main">
            <div>Bagage a main</div>
            <div><b>1X</b></div>
        </div>

        <div>
                <img src="" alt="image Accessoire">
                <div>Accessoire</div>
                <div><b>1X</b></div>
        </div>

        <div>
                <img src="" alt="image bagage en soute">
                <div>Bagage en soute</div>
                <input id="" name="num_client" type="hidden" value={{$num_client}}>
                <div>
                
                 <input type="button" onclick="incrementValue()" value="+" />
                <label id="nbBagage" name="nb_bagage_soute" >0</label>
  
                <input type="button" onclick="decrementValue()" value="-" />
                 <br>
                le prix:<label id="lePrix" name='prix' >0</label>
         </div>

         <script>


        
function incrementValue()
    {
        var nbBagage_id = document.getElementById('nbBagage')
        var value = parseInt(nbBagage_id.value, 10);
        var lePrix_id = document.getElementById('lePrix')
        var value1 = parseInt(nbBagage_id.value, 10);
        
        value = isNaN(value) ? 0 : value;
        value++;
        nbBagage_id.value = value;
        value1=value*50;
        nbBagage_id.innerHTML = value.toString() ; 
        lePrix_id.innerHTML = value1.toString() ;
    }

function decrementValue()
    {
        var nbBagage_id = document.getElementById('nbBagage')
        var value = parseInt(nbBagage_id.value, 10);
        var lePrix_id = document.getElementById('lePrix')
        var value1 = parseInt(nbBagage_id.value, 10);

      
        value = isNaN(value) ? 0 : value;
        value--;
        if (value < 0) {
            value = 0;
        }
        value1=value*50;
        nbBagage_id.value = value;
        nbBagage_id.innerHTML = value.toString() ; 
        lePrix_id.innerHTML = value1.toString() ;
    }




</script>

 
      <input type="submit">
      
    </form>
</body>

<style>
form{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 800px;
}


img{
    border: 1px solid black;
}

</style>
</html>