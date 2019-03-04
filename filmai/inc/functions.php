<?php
    $dsn = "mysql:host=localhost;dbname=crm";
    $user ="root";
    $passwd = "";

    $pdo = new PDO($dsn, $user ,$passwd);

    $stm = $pdo->query("SELECT pavadinimas,aprasymas,zanrai.zanras from filmai inner join zanrai on filmai.zanro_id=zanrai.id;");

    $results = $stm->fetchall(PDO::FETCH_ASSOC);
    
    
    //var_dump($results[0] , PHP_EOL);
    
    foreach($results as $data)
    {
      echo  $data['pavadinimas'];
    }
    





?>