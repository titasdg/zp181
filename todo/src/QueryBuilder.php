<?php 
namespace Tasker;

use PDO;


class QueryBuilder{
    private $pdo;

    public function __construct($pdo)
    {
       $this->pdo = $pdo;
    }
    public function selectAll($tableName){
        
        try {
        $stm =  $this->pdo->prepare("SELECT * from {$tableName};");
        
        $stm->execute();
       //var_dump($stm->fetchAll());
        return $stm->fetchAll();
       
        }
        catch(Exeption $e){
            echo "Klaida: 404err";
            exit;
        }
        

    }
    public function ById($id,$table)
    {
        try {
            $stm =  $this->pdo->prepare("SELECT * from {$tableName} WHERE id=:id;");
            $stm -> bindParam(':id',$id,PDO::PARAM_INT); 
            $stm->execute();
         
            return $stm->fetchAll();
           
            }
            catch(Exeption $e){
                echo "Klaida: 404err";
                exit;
            }
    }
    public function addTask($taskName,$taskDescription,$taskIsComplete,$table){
        $stm = $this->pdo->prepare("INSERT INTO task (name,description,isComplete) VALUES (:name,:description,:isComplete);");

       // $stm -> bindParam(':table',$table,PDO::PARAM_STR); 
        $stm -> bindParam(':name',$taskName,PDO::PARAM_STR); 
        $stm -> bindParam(':description',$taskDescription,PDO::PARAM_STR); 
        $stm -> bindParam(':isComplete',$taskIsComplete,PDO::PARAM_BOOL); 
        $stm->execute();

      
    }
    public function deleteTask($id,$table)
    {
        $stm = $this->pdo->prepare("DELETE FROM task WHERE id=:id;");
        //$stm -> bindParam(':table',$table,PDO::PARAM_STR); 
        $stm -> bindParam(':id',$id,PDO::PARAM_STR); 
        $stm->execute();
    }
    public function updateTask($id,$name,$description,$isComplete,$table){
        $stm = $this->pdo->prepare("UPDATE task SET name= :name, 
    description=:description,
    isComplete=:isComplete
    WHERE id = :id;");

        //$stm -> bindParam(':table',$table,PDO::PARAM_STR); 
        $stm -> bindParam(':name',$name,PDO::PARAM_STR); 
        $stm -> bindParam(':description',$description,PDO::PARAM_STR); 
        $stm -> bindParam(':isComplete',$isComplete,PDO::PARAM_BOOL); 
        $stm -> bindParam(':id',$id,PDO::PARAM_STR); 
        $stm->execute();
    }

    }
    





?>