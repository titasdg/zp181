<?php $table="";
 $resultArray = zanrai($dsn, $user ,$passwd,$options);
 if(isset($_POST['searchBygenre']))
     {
        $results=displayByGenre($_POST['id'],$dsn, $user ,$passwd,$options);
        if($results!=null)
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
       $table ="Siuo zanru filmu nera";
       
        }
        }
     
 
 ?>
 <form action="" method="POST">
     <fieldset >
         <select type="text" name="id">
             <option value="0">Select</option>
             <?php foreach($resultArray as $duomenys) :?>
             <option value="<?=$duomenys['id']?>"><?=$duomenys['zanras']?></option>
             <?php endforeach ;?>
     </select>
     </fieldset>
     <fieldset >
     <button type = "submit" name="searchBygenre">Submit</button>
     </fieldset>
     <?=$table?>
 </form>