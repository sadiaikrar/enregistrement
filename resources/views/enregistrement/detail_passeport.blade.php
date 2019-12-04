<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
{{-- {{$num_client}} --}}
<form method="POST" action="">
@csrf
  <div>Nom: {{$nom_client}}  prenom: {{$prenom_client}}</div> 
  <div>Date de naissance: {{$dateNaissance}}</div> 
<form>
   <div>Nationalité: 
       <select name="nationalite">
           <option value="DZ">Algerien</option>
           <option value="FR">Francais</option>
           <option value="..">.....</option>
        </select> 
         
  </div>

  <div>Numero de passeport: <input name="numero_passeport" value= {{old('num_passeport') }}></div>
       @if($errors->has('numero_passeport'))
        <p style="color: #FF0000; font-size: 1.0em;" > {{$errors->first('numero_passeport')}} </p>
        @endif
  <div>Confirmer numero de passeport: <input name="confirmer_numero_passeport" ></div>
       @if($errors->has('confirmer_numero_passeport'))
        <p style="color: #FF0000; font-size: 1.0em;" > {{$errors->first('confirmer_numero_passeport')}} </p>
        @endif

  <div>Date d'expiration: <input type="date" name="date_expiration_passeport" ></div>
       @if($errors->has('date_expiration_passeport'))
        <p style="color: #FF0000; font-size: 1.0em;" > {{$errors->first('date_expiration_passeport')}} </p>
        @endif

<div><a href=""><input type="submit" value="Continuer"></a> </div>
   
     @if (isset($error))
   <h1 style="color: #FF0000; font-size: 2em;"> {{$error}}  </h1>
@endif

 <div>
 <a href={{route('/enregistrement/information')}}>
  <input type="button" value="Retour"></div>
  </a>
</form>  

</body>

<style>
  form{
      border: 1px solid black;
      padding: 10px;
      width: 400px;
      
  }

  div{
      margin:5px;
  }
</style>
</html>