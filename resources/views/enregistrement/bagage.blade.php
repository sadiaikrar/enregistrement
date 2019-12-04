<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
   <h2>Bagages</h2>
    <table>
        <tr>
          <th>Passager</th> <th>Bagages</th> <th>Action</th>

        </tr>
       @foreach ($bagageClient as $bagage )
       
        <tr>
          <td>{{$bagage->nom_client}} {{$bagage->prenom_client}}</td> <td>1 bagage a main, 1 accessoire</td> 
          <td><a href="{{route('/enregistrement/ajouterDesBagages',[$bagage->num_client,$bagage->nom_client,$bagage->prenom_client])}}">
          
          <input type="button" value="Ajouter des bagages"></td>
          </a>
        </tr>
      @endforeach
     

    </table>
    
     <a  href={{route('/enregistrement/information')}}> 
  <input type="button" value="Retour">
   </a>
  <a  href={{route('/enregistrement/siège')}}> 
  <input type="button" value="Continuer l'enregistrement">
   </a> 
</body>

<style>
    table{
        width: 600px;
    }
    tr,th,td{
     border:1px solid black;
    }

</style>
</html>