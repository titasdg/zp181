<link rel="stylesheet" type="text/css" href="index.css">




<div class="main_Div">
<?php if(isset($_POST['submit'])):?>
   


        <div class="flight_number">
        <h1>Flight number  :  <?=$_POST['number']?></h1>
        </div>
        <div class="flight_info">
            <div class="date">
            <h1><?=date('Y\-m\-d')?></h1>
            </div>
            <div class="name">
            <p>First Name :  </p>
            <h1><?=$_POST['name']?></h1>
            <p>Last Name:  </p>
            <h1><?=$_POST['lname']?></h1>
            </div>
            <div class="flight">
            <p>Flying from </p>
            <span>TO</span>
            <p>Flying to </p>  
            <h1 class="to"><?=$_POST['from']?></h1>
            <h1 class="from"><?=$_POST['to']?></h1>
            </div>
        </div>
        <div class="flight_price">
            <?php if($_POST['baggage']>=20):?>
            <h1>Disclamer! 20kg or more cost extra 30e . peace!</h1>
                <p>Flight price  :  <?=$_POST['price']?> e</p>
                <p>Baggage price  :  +30e</p>
                <?php $total=$_POST['price']+30?>
                <h2>TOTAL : <?=$total?> e </h2>

            <?php endif ;?>
        
        </div>


    
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

