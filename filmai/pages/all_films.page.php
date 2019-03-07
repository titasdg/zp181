<?php 

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
    <td><a href="?action=delete&id=<?=$id;?>">Delete</a>
    <td><a href="?action=update&id=<?=$id;?>">update</a>
    </td>
</tr>
 
<?php endforeach;?>
</table>


