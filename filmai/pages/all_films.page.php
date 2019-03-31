<?php 
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
$displayAll = showAll($dsn, $user ,$passwd,$options);


?>
<p>Cia yra visi filmai </p>
<table class="table table-responsive table-bordered">
<?php foreach($displayAll as $data ) :?>
<?php $id=$data['id']?>
<tr>
   
    <td><?=$data['pavadinimas']?></td>
    <td><?=$data['aprasymas']?></td>
    <td><?=$data['zanras']?></td>
    <td><a href="?page=more&id=<?=$id;?>">More info</a>
    <td><a href="?page=send&id=<?=$id;?>">Send Link</a>
    <?php if ( $_SESSION['username']!=null&& $_SESSION['username']=='admin'):?>
    <td><a href="?action=delete&id=<?=$id;?>">Delete</a>
    <td><a href="?action=update&id=<?=$id;?>">update</a>
    </td>
<?php endif;?>
</tr>
 
<?php endforeach;?>
</table>


