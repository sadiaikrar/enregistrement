<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
</head>
<body>
    <h2>Ajouter des bagages</h2>
    <h4>{{$nom_client}} {{$prenom_client}}</h4> 
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
        
    <form method="POST" action={{"/enregistrement/informations/bagage"}}>
    @csrf
                <img src="" alt="image bagage en soute">
                <div>Bagage en soute</div>
                <input id="" name="num_client" type="hidden" value={{$num_client}}>
                <input type="number" value="0" name="nb_bagage_soute" id="soute">
                
                <input id='counter' type="text" name='prix' >
      <input type="submit">
         @if (isset($error))
   <h1 style="color: #FF0000; font-size: 2em;"> {{$error}}  </h1>
@endif
    </form>
<script>
counter = document.querySelector('#counter');
soute = document.querySelector('#soute');
soute.addEventListener('change' , ()=>{
    nbr = soute.value;
	counter.value = nbr * 200;
});

</script>


</body>


</html>