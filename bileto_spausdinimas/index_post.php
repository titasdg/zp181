<?php 
  $nameErr = $lnameErr = $codeErr = $priceErr = $fromErr= $toErr= $numberErr = $baggageErr ="";
if(isset($_POST['submit']))
{
  function htmlspecial_array(&$variable) {
    foreach ($variable as &$value) {
        if (!is_array($value)) { $value = htmlspecialchars($value); }
        else { htmlspecial_array($value); }
    }
  }
    htmlspecial_array($_POST);


    if (empty($_POST["name"])) {
      $nameErr = "Iveskite Varda";
    }
    if (empty($_POST["lname"])) {
      $lnameErr = "Iveskite Pavarde";
    }
    if (empty($_POST["code"])) {
      $codeErr = "Iveskite asmens koda";
    }
    if (empty($_POST["price"])) {
      $priceErr = "Iveskite kaina";
    }
    if (empty($_POST["from"])) {
      $fromErr = "Pasirinkite is kur skrendate";
    }
    if (empty($_POST["to"])) {
      $toErr = "Pasirinkite i kuyr skrendate";
    }
    if (empty($_POST["number"])) {
      $numberErr = "Pasirinkite iskrydzio numeri";
    }
    if (empty($_POST["baggage"])) {
      $baggageErr = "Pasirinkite bagazo svori";
    }
    if(!empty($_POST["name"]) && !empty($_POST["lname"])&& !empty($_POST["code"])&& !empty($_POST["price"])&& !empty($_POST["from"])&& !empty($_POST["to"])&& !empty($_POST["number"])&& !empty($_POST["baggage"]) )
    {
 $fp = fopen( 'data.json', 'w');
  fwrite($fp, json_encode($_POST));
  fclose($fp);
  header('Location:index.html');

    

}   
}
?>