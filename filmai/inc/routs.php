<?php 
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 


 
if(isset($_GET['page']))
{
foreach($links as $link => $duom)
{
switch ($_GET['page']) {
  case $link:
      include "pages/$duom.page.php";
      break;
   

} 
}
}
elseif(isset($_GET['action']))
{
    if ($_SESSION['username']=='admin'){
    foreach($actions as $action =>$duom)
    {
        switch ($_GET['action'])
        {
          case $action:
    include "pages/$duom.page.php";
    break;
  
        }
 

    }
}
else {
    header("Location: ?page=home");  
}
   
}



?>