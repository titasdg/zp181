


<link rel="stylesheet" type="text/css" href="indexx.css">






    
<?php endif ;?>
</div>


<form action="" method="POST">
    <fieldset >
        <input type="text" name="name" placeholder="Please enter your name">
    
    </fieldset>
    <fieldset >
        <input type="text" name="lname" placeholder="Please enter your lastname">
    
    </fieldset>
    <fieldset >
        <input type="text" name="code" placeholder="Please enter your personal code">
    
    </fieldset>
    <fieldset >
        <input type="text" name="price" placeholder="enter the price">
    
    </fieldset>

    <fieldset >
        <select type="text" name="from">
            <option value="0">Select from where ur flying</option>
            <?php foreach($iskur as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select>
    </fieldset>
    <fieldset >
        <select type="text" name="to">
            <option value="0">Select where ur flying to</option>
            <?php foreach($ikur as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select>
    </fieldset>
    <fieldset >
        <select type="text" name="number">
            <?php $sk=1 ?>
            <option value="0">Flyght number</option>
            <?php foreach($skrydzioNR as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select>
    </fieldset>
    <fieldset >
        <select type="text" name="baggage">
            <option value="0">Baggage</option>
            <?php foreach($bagazas as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?> kg </option>
            <?php endforeach ;?>
    </select>
    </fieldset>



    <fieldset >
    <button type = "submit" name="submit">Process</button>
    </fieldset>
</form>

