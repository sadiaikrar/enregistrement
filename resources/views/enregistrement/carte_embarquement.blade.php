<h1> carte embarquement</h1>
<h1> vol: {{$vol->num_vol}}</h1>
<h1> référence de reservation: {{$reservation->reference_reservation}}</h1>
@foreach($listeEnregistre as $key)
<h1>passager: {{$key->nom_client}} {{$key->prenom_client}}</h1>

@endforeach