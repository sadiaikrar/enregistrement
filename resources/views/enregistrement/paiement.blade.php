
<h1>prix de bagages en soute pour tout les passagers est: {{$somme}} DA</h1>
{{-- formaulaire de paiement  --}}
<form action="">
@csrf
carte de paiement :
<input type="text" name="nom_carte" placeholder="nom de la carte "><br>
<input type="int" name="num_carte" placeholder="numéro de la carte "><br>
<input type="date" name="experation" placeholder="date d'expération "><br>
<input type="submit" name="submit" value="valider">
</form>

@foreach($listeBagage as $key)
@if($key->prix_bagage_soute != 0)
<h3>numéro de passager: {{$key->num_client}}</h3>
@foreach($listeEnregistre as $cle)
@if($cle->num_client == $key->num_client)
<h3>Nom de passager: {{$cle->nom_client}}</h3>
<h3>nombres bagages en soute: {{$key->nb_bagage_soute}}</h3>
<h3>prix bagages en soute: {{$key->prix_bagage_soute}}</h3>


@endif
@endforeach
@endif
@endforeach




<a href='/enregistrement/macarte'>carte embarquement</a>