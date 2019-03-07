<?php


   function connetchToDb ($dsn, $user ,$passwd,$options){
    
    try {
      
           $pdo = new PDO($dsn, $user ,$passwd,$options);
         }
         catch (Exception $e) {
           echo "Negaliu prsijungti prie DB";
           echo $e->getMessage();
        exit;
      }
      return $pdo;

   }

/*------------------------------------------------------*/

  function zanrai ($dsn, $user ,$passwd,$options){
 $pdo = connetchToDb($dsn, $user ,$passwd,$options);
    try {
       $stm = $pdo->query("SELECT zanras,id from zanrai;");
    }
    catch (Exeption $e) {
      echo "Klaida : negaliu pasimti duomenu is DB";
      exit;

    }
   
      $results =$stm->fetchall();
      $pdo = null;
      return $results;
  }
   //var_dump($results[0] , PHP_EOL);
    
/*------------------------------------------------------*/

   function showAll ($dsn, $user ,$passwd,$options){
    $pdo = connetchToDb($dsn, $user ,$passwd,$options);
     try {
         $stm = $pdo->query("SELECT filmai.id,pavadinimas,aprasymas,zanrai.zanras from filmai inner join zanrai on filmai.zanro_id=zanrai.id;");
     }
     catch (Exeption $e){
       echo "Klaida : negaliu gauti duomenu is DB";
       exit;
     }
    $results = $stm->fetchall();
    $pdo = null;
    return $results;
   }

/*------------------------------------------------------*/

   function showOne($id,$dsn, $user ,$passwd,$options){
    $pdo = connetchToDb($dsn, $user ,$passwd,$options);
    try {
        $stm = $pdo->prepare("SELECT zanro_id,filmai.id,pavadinimas,aprasymas,premiera,zanrai.zanras from filmai inner join zanrai on filmai.zanro_id=zanrai.id WHERE filmai.id = :id;");
        $stm->bindParam(':id', $id, PDO::PARAM_STR);
    }
    catch (Exeption $e){
      echo "Klaida : negaliu gauti duomenu is DB";
      exit;
    }
    $stm ->execute();
   $results = $stm->fetchall();
   $pdo = null;
   return $results;
   }


/*------------------------------------------------------*/


   function addFilm ($pavadinimas,$aprasymas,$premiera,$zanras,$dsn, $user ,$passwd,$options)
   {
    $pdo = connetchToDb($dsn, $user ,$passwd,$options);
    $sql = "INSERT INTO filmai (pavadinimas,aprasymas,premiera,zanro_id) VALUES (:pavadinimas,:aprasymas,:premiera,:zanras)";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':pavadinimas', $pavadinimas, PDO::PARAM_STR);
    $stmt->bindParam(':aprasymas', $aprasymas, PDO::PARAM_STR);
    $stmt->bindParam(':premiera', $premiera, PDO::PARAM_STR);
    $stmt->bindParam(':zanras', $zanras, PDO::PARAM_STR);
    
    $stmt->execute();
   }
  function deleteFilm($id,$dsn,$user,$passwd,$options)
  {
    $pdo = connetchToDb($dsn, $user ,$passwd,$options);

    $sql = "DELETE FROM filmai WHERE id =  :filmID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':filmID', $id, PDO::PARAM_INT);   
    $stmt->execute();
  }

/*------------------------------------------------------*/

  function updateFilm ($id,$pavadinimas,$aprasymas,$premiera,$zanras,$dsn, $user ,$passwd,$options) {
    $pdo = connetchToDb($dsn, $user ,$passwd,$options);
    $sql = "UPDATE filmai SET pavadinimas = :pavadinimas, 
    aprasymas =:aprasymas,
    premiera = :premiera,
    zanro_id = :zanras
    WHERE filmai.id = :id";
$stmt = $pdo->prepare($sql);                                  
$stmt->bindParam(':pavadinimas', $pavadinimas, PDO::PARAM_STR);   
$stmt->bindParam(':aprasymas', $aprasymas, PDO::PARAM_STR);
$stmt->bindParam(':premiera', $premiera, PDO::PARAM_STR); 
$stmt->bindParam(':zanras', $zanras, PDO::PARAM_STR);  
$stmt->bindParam(':id', $id, PDO::PARAM_STR);        
  
$stmt->execute();

  }
?>