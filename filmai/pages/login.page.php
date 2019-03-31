<?php 
$error="";
$salt="php";
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


if(isset($_POST['login']))
{
$results=loginFunction($_POST['LoginName'],$dsn, $user ,$passwd,$options);

if($results!=null)
{
    foreach($results as $data)
    {
        
       if($_POST['LoginName']==$data['username'] && password_verify($_POST['password'], $data['password'] ) ){
$_SESSION["username"]="admin";
header("Location: ?page=login");
}

else{
    $error="Neteisingi duomenys";
}  
    }
} 
else {
    echo "Netinkamas prisijungimo vardas";
} 
}

if(isset($_POST['logout']))
{
$_SESSION["username"]="basic";
header("Location: ?page=login");  

}



?>
<h1>LOGIN</h1>
<?php if ($_SESSION['username']=='admin') :?>
<?php echo "Jus jau prisijunges"; ?>
<form action="" method="POST">
<fieldset >
    <button type = "submit" name="logout">Submit</button>
    </fieldset>
</form>
<?php else :?>
<form action="" method="POST">
<fieldset >
        <input type="text" name="LoginName" placeholder="login">
    </fieldset>
    <fieldset >
        <input type="password" name="password" placeholder="Password">
    </fieldset>
    <fieldset >
    <button type = "submit" name="login">Submit</button>
    </fieldset>
    <fieldset >
    <a href="?page=register">Register</a>
    </fieldset>
    <?php echo $error?>
    <?php endif ;?>

</form>
<?php 




?>