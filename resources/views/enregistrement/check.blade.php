<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
   <form action="/enregistrement/information" method="post">
            @csrf
       <div>
        reférence reservation : <input type="text" name="reference_reservation" placeholder="reference_reservation" value= {{old('reference_reservation') }} ><br><br>
        
        @if($errors->has('reference_reservation'))
        <p style="color: #FF0000; font-size: 1.0em;" > {{$errors->first('reference_reservation')}} </p>
        @endif
    </div>
       <div>Votre nom: <input type="text" name="nom_client" placeholder="votre nom" value= {{old('nom_client') }} ></div>
       
@if($errors->has('nom_client'))
<p style="color: #FF0000; font-size: 1.0em;" > {{$errors->first('nom_client')}} </p>
@endif
       <input type="submit" name="submit" value="Commencer l'enregistrement">
       @if (isset($error))
   <h1 style="color: #FF0000; font-size: 2em;"> {{$error}}  </h1>
@endif
    </form>   
</body>

<style>
 form{
     border: 1px solid black;
     width: 400px;
     padding: 5px;
    
 }
 div{
     margin: 10px;
 }
</style>
</html>