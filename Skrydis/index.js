


var startAjax = new XMLHttpRequest();
startAjax.onreadystatechange = function(){
    if (startAjax.readyState === 4)
    {
        var Masyvas = JSON.parse(startAjax.responseText);
    console.log(Masyvas);
    }



    
}
startAjax.open('GET', 'data.json',true);
startAjax.send();





