
{{-- {{dd($affectation)}}  --}}
<div class="seats_container">
    <div class="seats__passengers">

	@for($i=0; $i< count($listeEnregistre); $i++)
      <div class="seats__passenger" >
          <img src="{{asset('images/man.png')}}" class="passenger__logo" id="pass{{$i+1}}">
          <div class="passenger__num">Passager {{$i+1}}</div>
          <div class="passenger__name">{{$listeEnregistre[$i]->nom_client}} {{$listeEnregistre[$i]->prenom_client}}</div>
      </div>
      
     @endfor
 
    </div>
    
    <div class="airplane_seats">
         <div class="airplane_seats__class">Economique</div>

   @foreach ($ToutNumSiege as $key)
         <?php  $colone=substr($key,0,1);?>
         
         @if($colone == 'A')
             <div class="airplane_seats__row"> 
		  @endif

          @if($colone == 'A' || $colone =='D')
             <div class="airplane_seats__section"> 
		  @endif 


		   @if(in_array($key, $siegeOccupe))
				<div class="airplane_seats__seat seat--busy" id="{{$key}}">{{$key}}</div>
		   @else

				@if(in_array($key, $affectation))
                
				<div class="airplane_seats__seat seat--selected " id="{{$key}}">{{array_search($key, $affectation)}}</div>
				@else
				<div class="airplane_seats__seat " id="{{$key}}">{{$key}}</div>
			    @endif

		   @endif
                 
              

		 @if($colone == 'C' || $colone =='F')
             </div>
			 @if($colone=='C')
			 	<div class="airplane_seats__space"></div>
             @else
                </div>
			 @endif	 

		 @endif  
            

             

 			 
         

         
    @endforeach
    
         
    </div>
 </div>
 
 <form action="/enregistrement/informations/bagage/siège" method="POST">
 @csrf
 @for ($i=1;$i<=count($affectation);$i++)
	 <input name="passager_{{$i}}" value="{{$affectation[$i]}}" class="passenger_hidden">
 @endfor
   
     <input type="submit">
 </form>
 
 <link rel="stylesheet" type="text/css" href={{asset('css/seats.css')}}>
 
 <script>
 var passengers=document.querySelectorAll('.passenger__logo');
 
 var seats=document.querySelectorAll('.airplane_seats__seat');
 var num_pass=0;
 
 for(var i=0;i<passengers.length;i++)
     passengers[i].onclick = function(){passengerClick(event)};
 for(var i=0;i<seats.length;i++)
     seats[i].onclick = function(){seatClick(event)};    
     
 
 
  function passengerClick(event){
     num_pass= event.target.id.substr(4) ;
     
     for(var i=0;i<passengers.length;i++) 
     passengers[i].classList.remove('passenger__logo--selected');
 
      event.target.classList.add("passenger__logo--selected");
  }
 
  function seatClick(event){
      if(num_pass==0) alert("Veuillez choisir un passager")
      var selected=event.target;
     if(selected.classList.contains("seat--selected")||selected.classList.contains("seat--busy")) alert("Place Occupe !");
     else{
         
         changerPlace( num_pass, selected);
 
 
     }
  }
 
  function changerPlace( num_pass, new_place){
     var old_place_id;
     var selectedplace_id=new_place.id;
     var  selected_places=document.querySelectorAll('.passenger_hidden');
 
 
     for(var i=0;i<selected_places.length;i++){
          if ((selected_places[i].name)=="passager_"+num_pass){
    
          old_place_id=selected_places[i].value; 
          selected_places[i].value=selectedplace_id;
                 }
          
          }
     var old_place=document.querySelector('#'+old_place_id);
     
     old_place.classList.remove('seat--selected');
     
     new_place.classList.add('seat--selected');
     new_place.textContent=num_pass;
     old_place.textContent=old_place_id;
     
 
     }
 
 </script>