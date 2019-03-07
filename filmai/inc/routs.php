<?php 


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



?>