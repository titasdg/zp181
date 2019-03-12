<?php 
deleteFilm($_GET['id'],$dsn,$user,$passwd,$options);

header("Location: ?page=all-films"); 
?>
