<?php 
require "vendor/autoload.php";

use Tasker\Random;
use Tasker\DataBase;
use Tasker\QueryBuilder;
use Tasker\Task;

$config = require 'config.php';

$pdo = DataBase::connect($config['database']);

$query = new QueryBuilder($pdo);


if(isset($_GET['action']) && $_GET['action']=="delete"){
    $query->deleteTask($_GET['id'],'task');
}

if(isset($_POST['submitnewTask']))
{
   $is_complete = (isset($_POST['isComplete'])) ? '1':'0';
  echo $is_complete;
  $query->addTask($_POST['name'],$_POST['desc'],$is_complete,'task');
}
if(isset($_POST['submitupdate']))
{
$is_complete_update = (isset($_POST['update_isComplete'])) ? '1':'0';
  $query->updateTask($_GET['id'],$_POST['update_name'],$_POST['update_desc'],$is_complete_update,'task');
  header("location:/todo");

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body style="margin-left:20px">

    <div style="margin-top:20px;">
    <form action="" method="POST">
<fieldset >
        <input type="text" name="name" placeholder="Name">
    </fieldset>
    <fieldset >
        <input type="text" name="desc" placeholder="Description">
    </fieldset>
    <fieldset >
    <input type="checkbox" name="isComplete" > Task is completed<br>
    </fieldset>

    <fieldset >
    <button type = "submit" name="submitnewTask">Submit</button>
    </fieldset>
</form>

    
    </div>
    <h1>Hello, world!</h1>
    <?php 
$table='<table class="table table-responsive">';
foreach ($query->selectAll('task') as $task)
{  
  $id =$task['id'];
 
     if (isset($_GET['action']) && $_GET['action']=="update" && $_GET['id']==$task['id'])
  {
    $table.= '<tr>'; 
    $table.='<form action="" method="POST">';
    $table.='<td><fieldset><input type="text" name="update_name" value="';
    $table.=$task['name'].'"></fieldset></td>';
    $table.='<td><fieldset ><input type="text" name="update_desc" value="';
    $table.=$task['description'].'"> </fieldset></td>';
    if($task['isComplete']==1)
    {
      $table.='<td> <fieldset >
      <input type="checkbox" name="update_isComplete" checked> Task is completed<br></fieldset></td>';
    }
    else {
        $table.='<td> <fieldset >
    <input type="checkbox" name="update_isComplete" > Task is completed<br></fieldset></td>'; 
    }
    $table.=' <td><fieldset ><button type = "submit" name="submitupdate">Submit</button></fieldset></td></form>'; 
    $table.='<td><a href="?action=delete&id=';
    $table.=$id.'">Delete</a></td>';
    $table.= '</tr>'; 
   

  
  }

  else {
    $table.= '<tr>'; 
    $table.="<td>{$task['name']}</td>";
    $table.="<td>{$task['description']}</td>";
    if ($task['isComplete']==0)
    {
         $table.="<td><p>Neatlikta</p></td>";
    }
    else {
        $table.="<td><p>Atlikta</p></td>";
    }
    
    $table.='<td><a href="?action=update&id= ';
    $table.=$id.'">Update</a></td>';
    $table.='<td><a href="?action=delete&id=';
    $table.=$id.'">Delete</a></td>';
   
    $table.= '</tr>'; 
  }
  
    
}

$table.= '</table> ';  

echo $table;

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>