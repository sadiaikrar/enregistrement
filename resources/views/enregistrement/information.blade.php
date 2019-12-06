<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
   <h2>Informations</h2>
    <table>
        <tr>
          <th>Passager</th> <th>Statut</th> <th>Action</th>

        </tr>
        {{-- {{session()->get('client')}} --}}
        @foreach ($listeClient as $key )
        {{-- {{dd($listeClient[2]->nationalite_client)}} --}}
        <tr>
          <td>{{$key->nom_client}} {{$key->prenom_client}}</td>
          @if ($key->statut == 1)
             <td>{{'enregistrer'}}</td> 
          @else
             <td>{{'non enregistrer'}}</td> 
          @endif  
           <td> <a href={{route('/enregistrement/detail_passeport',[$key->num_client,$key->nom_client,$key->prenom_client])}}>  
        <button style="" type="submit" name="submit"> ajouter détails passeport </button>
   </a> </td>

        </tr>
        @endforeach
        

    </table>
   <a href='/enregistrement'> <input type="button" value="Retour"></a>


    <a  href={{route('/enregistrement/informations/bagage')}}>  
        <button style="" type="submit" name="submit"> Continuer </button>
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