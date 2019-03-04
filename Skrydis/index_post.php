<?php 

if(isset($_POST['submit']))
{
  $fp = fopen('duomenys/data.json','w');
  fwrite($fp, json_encode($_POST));
  fclose($fp);
  header('location: index.html');
}
   
?>