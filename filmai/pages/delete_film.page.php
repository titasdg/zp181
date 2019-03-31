<?php 
if ($_SESSION['username']=='admin')
{
    if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
if ($_SESSION['username']=='admin'){
deleteFilm($_GET['id'],$dsn,$user,$passwd,$options);

header("Location: ?page=all-films"); 

} 
}
else {
    header("Location:?page=home");
}

?>
