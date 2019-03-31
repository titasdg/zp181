
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10) {
    dd = '0'+dd
} 
if(mm<10) {
    mm = '0'+mm
} 
today = mm + '/' + dd + '/' + yyyy;


var startAjax = new XMLHttpRequest();
startAjax.onreadystatechange = function(){
    if (startAjax.readyState === 4)
    {
        var Masyvas = JSON.parse(startAjax.responseText);
        let kaina = parseFloat(Masyvas.price);
        var kelione= '<div class="flight_number"> <h1>Flight number : '+ Masyvas.number +' </div> <div class="flight_info"><div class="date"><h1>'+today+'</h1> </div><div class="name"><p>First Name :  </p><h1>'+Masyvas.name+'</h1> <p>Last Name:  </p><h1>'+Masyvas.lname+'</h1></div><div class="flight"><p>Flying from </p><p>Flying to </p>  <h1 class="to">'+Masyvas.from+'</h1><h1 class="from">'+Masyvas.to+'</h1></div></div><div class="flight_price">';
        if(Masyvas.baggage>=20)
        {
            var total =kaina+30;
            kelione+='<h1>Disclamer! 20kg or more cost extra 30e . peace!</h1><p>Flight price  : '+kaina+' e</p><p>Baggage price  :  +30e</p><h2>TOTAL : '+total+' e </h2></div>';
        }
        else {

            kelione+='<p>Flight price  :  '+kaina+' e</p><h2>TOTAL : '+kaina+' e </h2></div>';
        }


        document.querySelector('.main_Div').innerHTML = kelione;
  
    }



    
}
startAjax.open('GET', 'data.json',true);
startAjax.send();





