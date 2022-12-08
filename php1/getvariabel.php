<?php

if($_GET){

 echo $_GET['number'];

 }
?>

<p> Plz enter a whole number. </p>

<form method="GET">

<input name="number" type="text">
<input type="Submit" value="Go..!">
</form>