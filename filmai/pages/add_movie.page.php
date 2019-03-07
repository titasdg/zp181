<?php 
 $resultArray = zanrai($dsn, $user ,$passwd,$options);
if(isset($_POST['submitNewFilm']))
    {
        addFilm($_POST['name'],$_POST['about'],$_POST['date'],$_POST['id'],$dsn, $user ,$passwd,$options);
        header("Location: ?page=all-films"); 
    }

?>
<form action="" method="POST">
<fieldset >
        <input type="text" name="name" placeholder="Name">
    </fieldset>
    <fieldset >
        <input type="text" name="about" placeholder="About">
    </fieldset>
    <fieldset >
        <input type="text" name="date" placeholder="Date">
    </fieldset>
    <fieldset >
        <select type="text" name="id">
            <option value="0">Select</option>
            <?php foreach($resultArray as $duomenys) :?>
            <option value="<?=$duomenys['id']?>"><?=$duomenys['zanras']?></option>
            <?php endforeach ;?>
    </select>
    </fieldset>
    <fieldset >
    <button type = "submit" name="submitNewFilm">Submit</button>
    </fieldset>
</form>






