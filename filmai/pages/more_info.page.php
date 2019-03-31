<?php 
$results=showOne($_GET['id'],$dsn, $user ,$passwd,$options);

?>
<table class="table table-responsive table-bordered">
<?php foreach($results as $data ) :?>

<tr>
   
    <td><?=$data['pavadinimas']?></td>
    <td><?=$data['aprasymas']?></td>
    <td><?=$data['zanras']?></td>
    <td><?=$data['premjeros_data']?></td>

  
</tr>
<?php endforeach;?>
</table>