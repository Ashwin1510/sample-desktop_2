<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>
</head>
<body>
    
<?php  
$x = 1;
 
do {
  echo "The no's r : $x <br>";
  $x=$x+2;

}  
while($x<=10);

echo "<BR><HR>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  
echo "<BR><HR>";
$i = 0;
$students = array("Peter", "Ben", "Joe");
$marks = array("75","86","99");
foreach ($students as $s){
  echo "Name =  $s marks $marks[$i]<br>";  $i = $i+1;
}
  ?>  

</body>
</html>