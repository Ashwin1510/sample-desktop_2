<?php

$myArray = array("jhon","ED","Sally","tom");

print_r($myArray);


echo "<br>";

echo $myArray[2];

echo "<br><hr>";

$fArray = array();

$fArray[0] = "pizza";
$fArray[1] = "tea";
$fArray[2] = "coffice";

$fArray[] = "fudge";
//$fArray["myFavoriteFood"] = "ice crem";

print_r($fArray);
echo "<br><hr>";


$languages = array(
    "france" => "french",
    "germany" => "german",
    "usa" => "English"
);

print_r($languages);

echo "<br><hr>";

unset($languages["france"]);
 echo "<br>";

 print_r($languages);

 echo "<br>";

 

 echo sizeof($languages);

 echo "<br><hr>";









?>