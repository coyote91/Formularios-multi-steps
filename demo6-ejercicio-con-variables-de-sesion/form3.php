<?php

//let's start the session

session_start();

//finally, let's store our posted values in the session variables

$_SESSION['membership_type'] = $_POST['membership_type'];

$_SESSION['terms_and_conditions'] = $_POST['terms_and_conditions'];


?>


<form method="post" action="form_process.php">

<label for="name_on_card">Nombre del dueño de la tarjeta de credito</label> <br> <br>
<input type="text" name="name_on_card"> <br> <br>

<label for="credit_card_number"> Numero de la tarjeta de credito</label> <br> <br>
<input type="text" name="credit_card_number"> <br> <br>

<label for="credit_card_expiration_date"> Fecha expiracion</label> <br> <br>
<input type="text" name="credit_card_expiration_date"> <br> <br>

<input type="submit" value="Finish">

</form>
