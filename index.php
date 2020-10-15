<?php

// loop in php

// while loop in php
// $fuel = 10;
// while ($fuel > 1)
//  {// Keep driving ...
//     echo "There's enough fuel";
// }
// output there's enough fuel infinite times cause this loop doesn't has terminating condition

// while loop example 2
// $count = 1;
// while ($count <= 12){
//     echo "$count times 12 is " . $count * 12 . "<br />";
//     ++$count;}

// output
// 1 times 12 is 12
// 2 times 12 is 24
// 3 times 12 is 36
// 4 times 12 is 48
// 5 times 12 is 60
// 6 times 12 is 72
// 7 times 12 is 84
// 8 times 12 is 96
// 9 times 12 is 108
// 10 times 12 is 120
// 11 times 12 is 132
// 12 times 12 is 144


// while loop example 3
// $count = 0;
// while (++$count <= 12)
// echo "$count times 12 is " . $count * 12 . "<br />";

// same output as above
// 1 times 12 is 12
// 2 times 12 is 24
// 3 times 12 is 36
// 4 times 12 is 48
// 5 times 12 is 60
// 6 times 12 is 72
// 7 times 12 is 84
// 8 times 12 is 96
// 9 times 12 is 108
// 10 times 12 is 120
// 11 times 12 is 132
// 12 times 12 is 144

// do while loop
// do while loop example 1
// $count = 1;
// do
// echo "$count times 12 is " . $count * 12 . "<br />";
// while (++$count <= 12);
// same output
// 1 times 12 is 12
// 2 times 12 is 24
// 3 times 12 is 36
// 4 times 12 is 48
// 5 times 12 is 60
// 6 times 12 is 72
// 7 times 12 is 84
// 8 times 12 is 96
// 9 times 12 is 108
// 10 times 12 is 120
// 11 times 12 is 132
// 12 times 12 is 144

// for loop
// for loop example 1
// for 
// ($count = 1 ; $count <= 12 ; ++$count)echo "$count times 12 is " . $count * 12 . "<br />";
// output
// 1 times 12 is 12
// 2 times 12 is 24
// 3 times 12 is 36
// 4 times 12 is 48
// 5 times 12 is 60
// 6 times 12 is 72
// 7 times 12 is 84
// 8 times 12 is 96
// 9 times 12 is 108
// 10 times 12 is 120
// 11 times 12 is 132
// 12 times 12 is 144

// break statement 
// $fp = fopen("text.txt", 'wb');
// for ($j = 0 ; $j < 100 ; ++$j){$written = fwrite($fp, "data");
//     if ($written == FALSE) break;}
//     fclose($fp);
// output
// if user is writing in the file then file is open else file is closed

// continue statement
// continue statement example
// $j = 10;
// while ($j > −10)
// {
//     $j--;
//     if ($j == 0) continue;
//     echo (10 / $j) . "<br />";
// }
// output
// 1.1111111111111
// 1.25
// 1.4285714285714
// 1.6666666666667
// 2
// 2.5
// 3.3333333333333
// 5
// 10


// array in php
$VCS = array("Git","Mercurial","SVN");
print_r($VCS);
echo "<br>";
$Platform[] = "StackOverflow";
$Platform[] = "Github";
$Platform[] = "Linked in";
$Platform[] = "Redit";
print_r($Platform);
echo "<br>";
echo "<br>";
// retrieving elements from array
// using for loop for retrieving value
for($i=0; $i<4; $i++)
{
    echo("$i:$Platform[$i]<br>");
}
echo "<br>";
// associative array in php
$car['luxury']= "BMW";
$car['speed']= "Bugatti";
$car['comfort'] = "Rolls Royce ";

echo $car['speed'];
echo "<br>";
echo $car['comfort'];
echo "<br>";
echo "<br>";

// adding items to array using array keyword
$players = array("Ronaldo"=>"35", "Messi"=>"33", "Neymar"=>"28");
foreach($players as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

echo "<br>";
echo "<br>";

//   printing all value of indexed array
$food=array("Biryani","Momo","Sekuwa");
// printing value of indexed array
$arrLength=count($food);
for($y=0; $y<$arrLength; $y++)
{
    echo$food[$y];
    echo "<br>";
}

echo "<br>";
echo "<br>";

// multi dimensional array in php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "<br>";
echo "<br>";


// multi dimensional associative array in php
$products = array( "paper" => array(
    'copier' => "Copier & Multipurpose",
    'inkjet' => "Inkjet Printer",
    'laser' => "Laser Printer",
    'photo' => "Photographic Paper"),
    'pens' => array(
    'ball' => "Ball Point",
    'hilite' => "Highlighters",
    'marker' => "Markers"), );
    

echo "<pre>";
foreach ($products as $section => $items)
foreach ($items as $key => $value)
echo "$section:\t$key\t($value)<br>";
echo "</pre>";



?>