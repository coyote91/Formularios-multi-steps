<?php

//let's start the session
session_start();

//finally, let's store our posted values in the session variables

$_SESSION['name'] = $_POST['name'];

$_SESSION['email_address'] = $_POST['email_address'];



?>

<form method="post" action="form3.php">

<label for="membership_type">Selecciona tu plan </label> <br> <br>

<span>Free</span>
<input type="radio" name="membership_type" value="Free"> <br>

<span>Normal</span>
<input type="radio" name="membership_type" value="Normal"> <br>

<span>Deluxe</span>
<input type="radio" name="membership_type" value="Deluxe"><br><br>

<label for="terms_and_conditions">Acepta los terminos y condiciones</label>

<input type="checkbox" name="terms_and_conditions"> <br> <br>

<input type="submit" value="Go To Step 3">

</form>
