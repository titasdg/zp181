<?php $table="";

 if(isset($_POST['searchFilm'])) 
 {
$results = search ($_POST['search'],$dsn, $user ,$passwd,$options);
 
 if(empty($_POST['search'])){
  $table ="Paieskoje kazka yrasykite";

 }

else if($results!=null)
 {
   $table.='<table class="table table-responsive table-bordered">';
foreach ($results as $data) 
   {
   $table.= '<tr>'; 
       
   $table.= "<td>{$data['pavadinimas']}</td>";  
   $table.= " <td>{$data['aprasymas']}</td>";   
   $table.= "<td>{$data['zanras']}</td>";    

   $table.= '</tr>'; 
     
   }
   $table.= '</table> ';  
   
 }
 
 else {
$table ="Filmu tokiu pavadinimu nerasta";

 }
 }
 
?>

   
<p>Search</p>
<form action="" method="POST">
<fieldset>
<input type="text" name="search" placeholder="Search" >
</fieldset>
<fieldset >
    <button type = "submit" name="searchFilm">Submit</button>
    </fieldset>

<?=$table?>

</form>