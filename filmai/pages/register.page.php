
<?php 
$salt="php";
if(isset($_POST['register']))
{
$isThereNoDuplicate = loginFunction($_POST['LoginName'],$dsn, $user ,$passwd,$options);
if($isThereNoDuplicate==null)
{
   register($_POST['LoginName'],crypt($_POST['password'],$salt),$dsn, $user ,$passwd,$options);
header("Location: ?page=login");
} 
else {
    echo "Toks prisijungimo vardas jau egzistuoja";
}
}



?>
<h1>Register</h1>
<form action="" method="POST">
<fieldset >
        <input type="text" name="LoginName" placeholder="login">
    </fieldset>
    <fieldset >
        <input type="password" name="password" placeholder="Password">
    </fieldset>
    <fieldset >
    <button type = "submit" name="register">Submit</button>
    </fieldset>
  
    
</form>