<?php if ($_SESSION['username']=='admin'):?>
<?php 
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
$error="";
$displayOne = showOne($_GET['id'],$dsn, $user ,$passwd,$options);
$zanraiArray = zanrai ($dsn, $user ,$passwd,$options);
if(isset($_POST['updatefilm']))
    {
        if ($_SESSION['username']=='admin') 
        {
             htmlspecial_array($_POST);
        if (empty($_POST["name"]) || empty($_POST["about"]) || empty($_POST["date"]) || empty($_POST["id"]))
        {
 $error= "Visi laukai turi buti uzpildyti norit atnaujinti informacija apie filma";
        }
        else {
           updateFilm($_GET['id'],$_POST['name'],$_POST['about'],$_POST['date'],$_POST['id'],$dsn, $user ,$passwd,$options);
        header("Location: ?page=all-films");  
        }
        }
       
        
    }
?>
<?php echo $error;?>
<?php foreach ($displayOne as $data): ?>
<form action="" method="POST">
<fieldset >
        <input type="text" name="name" placeholder="<?=$data['pavadinimas']?>" value="<?=$data['pavadinimas']?>">
    </fieldset>
    <fieldset >
        <input type="text" name="about" placeholder="<?=$data['aprasymas']?>" value="<?=$data['aprasymas']?>">
    </fieldset>
    <fieldset >
        <input type="text" name="date" placeholder="<?=$data['premjeros_data']?>" value="<?=$data['premjeros_data']?>">
    </fieldset>
    <fieldset >
        <select type="text" name="id">
            <?php foreach($zanraiArray as $duomenys) :?>
            <?php if($data['zanro_id']==$duomenys['id']):?>
            <option selected="selected" value="<?=$duomenys['id']?>"><?=$duomenys['zanras']?></option>
            <?php else :?>
            <option value="<?=$duomenys['id']?>"><?=$duomenys['zanras']?></option>
             <?php endif ;?>
            <?php endforeach ;?>
    </select>
    </fieldset>
    <fieldset >
    <button type = "submit" name="updatefilm">Update</button>
    </fieldset>
</form>
<?php endforeach ;?>
<?php else :?>
<?php header("Location:?page=home")?>
<?php endif;?>