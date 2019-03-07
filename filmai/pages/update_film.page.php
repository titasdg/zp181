<?php 

$displayOne = showOne($_GET['id'],$dsn, $user ,$passwd,$options);
$zanraiArray = zanrai ($dsn, $user ,$passwd,$options);
if(isset($_POST['updatefilm']))
    {
        updateFilm($_GET['id'],$_POST['name'],$_POST['about'],$_POST['date'],$_POST['id'],$dsn, $user ,$passwd,$options);
        header("Location: ?page=all-films"); 
    }
?>
<?php foreach ($displayOne as $data): ?>
<form action="" method="POST">
<fieldset >
        <input type="text" name="name" placeholder="<?=$data['pavadinimas']?>" value="<?=$data['pavadinimas']?>">
    </fieldset>
    <fieldset >
        <input type="text" name="about" placeholder="<?=$data['aprasymas']?>" value="<?=$data['aprasymas']?>">
    </fieldset>
    <fieldset >
        <input type="text" name="date" placeholder="<?=$data['premiera']?>" value="<?=$data['premiera']?>">
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
