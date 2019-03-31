<?php ;
 $resultArray = zanrai($dsn, $user ,$passwd,$options);
 foreach ($resultArray as $duomenys)
 {
$table="";
 $results=displayByGenre($duomenys['id'],$dsn, $user ,$passwd,$options);
        if($results!=null)
        {
            $amount=count($results);
        $table="{$duomenys['zanras']} zanro filmu visame sarase turim : {$amount} <br>";
         
          
        }
        else {
       $table ="{$duomenys['zanras']} zanru filmu nera <br>";
       
        }
        echo $table;
        }



 
       
     
 ?>

     
 </form>