<?php include "index_post.php"; ?>



<link rel="stylesheet" type="text/css" href="indexxx.css">
<script src="index.js"></script>


<form action="" method="POST">
    <fieldset >
        <input type="text" name="name" placeholder="Name"><span><?php echo $nameErr; ?> </span>
    </fieldset>
    <fieldset >
        <input type="text" name="lname" placeholder="Please enter your lastname"> <?php echo $lnameErr; ?> </span>
    
    </fieldset>
    <fieldset >
        <input type="text" name="code" placeholder="Please enter your personal code"><?php echo $codeErr; ?> </span>
    
    </fieldset>
    <fieldset >
        <input type="text" name="price" placeholder="enter the price"><?php echo $priceErr; ?> </span>
    
    </fieldset>

    <fieldset >
        <select type="text" name="from">
            <option value="0">Select from where ur flying</option>
            <?php foreach($iskur as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select><?php echo $fromErr; ?> </span>
    </fieldset>
    <fieldset >
        <select type="text" name="to">
            <option value="0">Select where ur flying to</option>
            <?php foreach($ikur as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select><?php echo $toErr; ?> </span>
    </fieldset>
    <fieldset >
        <select type="text" name="number">
            <?php $sk=1 ?>
            <option value="0">Flyght number</option>
            <?php foreach($skrydzioNR as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?></option>
            <?php endforeach ;?>
    </select><?php echo $numberErr; ?> </span>
    </fieldset>
    <fieldset >
        <select type="text" name="baggage">
            <option value="0">Baggage</option>
            <?php foreach($bagazas as $duomenys) :?>
            <option value="<?=$duomenys?>"><?=$duomenys?> kg </option>
            <?php endforeach ;?>
    </select><?php echo $baggageErr; ?> </span>
    </fieldset>

    <fieldset >
    <button type = "submit" name="submit">Process</button>
    </fieldset>
</form>

