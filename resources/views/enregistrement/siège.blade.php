<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <form method="" action="">


    <h2>Places</h2>

    <h3 >1) Selectionnez un passager</h3>
   
    
    <div class="passagers">
       <div class="passager selectione" id="1">
          <b> Passager 1 </b>
          <p>{{$siègeClient[0]->nom_client}} {{$siègeClient[0]->prenom_client}}</p>
       </div>
       
 @for($i=1; $i< count($siègeClient); ++$i)
       <div class="passager" id={{$i+1}}>
           <b> Passager {{$i+1}} </b>
           <p>{{$siègeClient[$i]->nom_client}} {{$siègeClient[$i]->prenom_client}}</p>
        </div>
@endfor
       
    </div>

    <h3 >2) Selectionnez la nouvelle place</h3>
    <div class="places">
{{-- @for($i=1;$i<=20;$i++)
@if($i%2 == 0)
<div class="place"><input readonly  class="occupe" type="text" value={{$i}} ><span></span></div>
            
           
@else  
{{-- @for($j=1; $j<= count($siègeClient); ++$j)  --}}
 
  {{-- <div class="place"><input readonly  class="selectione" type="text" name="passager_{{$j}}" value={{$i}}><span>Passager {{$j}}</span></div>       --}}
           
         {{-- <div class="place"><input readonly  type="text" value={{$i}} ><span></span></div>   --}}
            {{-- @endfor  --}}

            
  
            <div class="place"><input readonly  type="text" value="1" ><span></span></div>
            <div class="place"><input readonly  type="text" value="2" ><span></span></div>
            <div class="place"><input readonly  type="text" value="3" ><span></span></div>
            <div class="place"><input readonly  type="text" value="4" ><span></span></div>
            <div class="place"><input readonly  class="selectione" type="text" name="passager_2" value="5"><span>Passager 2</span></div>
            <div class="place"><input readonly  type="text" value="6" ><span></span></div>
            <div class="place"><input readonly  class="selectione"  type="text" name="passager_1" value="7" ><span>Passager 1</span></div>
            <div class="place"><input readonly  class="occupe" type="text" value="8" ><span></span></div>
            <div class="place"><input readonly  type="text" value="9" ><span></span></div>
            <div class="place"><input readonly  class="selectione" type="text"  name="passager_3" value="10" ><span>Passager 3</span></div>
            <div class="place"><input readonly  type="text" value="11" ><span></span></div>
            <div class="place"><input readonly  type="text" value="12" ><span></span></div>
            <div class="place"><input readonly  class="occupe"  type="text" value="13" ><span></span></div>
            <div class="place"><input readonly  type="text" value="14" ><span></span></div>
            <div class="place"><input readonly  class="occupe"  type="text" value="15" ><span></span></div>
            <div class="place"><input readonly  type="text" value="16" ><span></span></div>
            <div class="place"><input readonly  type="text" value="17" ><span></span></div>
            <div class="place"><input readonly  type="text" value="18" ><span></span></div>
            <div class="place"><input readonly  type="text" value="19" ><span></span></div>
    

    </div>
<input type="submit" value="Valider">
</form>
</body>

<style>
    .passagers{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    width: fit-content;
    }

    .passager{
        width: 100px;
        padding: 20px;
        margin: 10px;
        border: 1px solid black;
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }

    .places{
        width: 330px;
        height: 500px;   
        border: 1Px solid black;
        display: flex;
        flex-wrap: wrap;
    }
    .place>input{
        width:50px;
        height: 50px;
        border: 1Px solid black;
        margin: 15px;
      text-align: center;
    font-size: 19px;
    font-weight: bold;
    cursor: pointer;
    background: darkseagreen;
    }

    .place{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .occupe{
        background: grey !important;
    }
    .selectione{  
        background: deepskyblue !important;
    }
    span{
        background: deepskyblue;
        font-weight: bold;
        }


</style>


<script>
 var passagers= document.getElementsByClassName("passager");
 for(var i=0;i<passagers.length;i++)
 passagers[i].onclick = function() {passagerClick(event)};

 var places= document.getElementsByClassName("place");
 for(var i=0;i<places.length;i++)
 places[i].firstChild.onclick = function() {placeClick(event)};


 var num_passager=1;



 function passagerClick(event){
     if(event.target.classList.contains('passager')){
     for(var i=0;i<passagers.length;i++) passagers[i].classList.remove("selectione");
     event.target.classList.add("selectione");
      
      num_passager=event.target.id;
     
     }
 }

 function placeClick(event){
    
                                           

     var place_selectione=event.target;
    if(place_selectione.classList.contains("occupe")||place_selectione.classList.contains("selectione")) alert("Place Occupe !");
    else{
         changerPlace(num_passager,place_selectione.value)

    }

 }





 function changerPlace( num_passager, nouvel_place){
    var ancien_place;
    nouvel_place--;
    
    for(var i=0;i<places.length;i++){
         if ((places[i].firstChild.name)=="passager_"+num_passager)
         ancien_place=i; 
         }

         places[ancien_place].firstChild.removeAttribute("name");
         places[ancien_place].firstChild.textContent="";
         places[ancien_place].firstChild.classList.remove("selectione");
         places[ancien_place].lastChild.textContent="";
         
         places[nouvel_place].firstChild.name="passager_"+num_passager;
         places[nouvel_place].firstChild.textContent=num_passager;
         places[nouvel_place].firstChild.classList.add("selectione");
         places[nouvel_place].lastChild.textContent="passager "+num_passager;
          }



</script>
</html>