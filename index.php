<?php

// indexed arrays

$peopleOne = ['legrand', 'leonce', 'junes'];
// echo $peopleOne[0];

$peopleTwo = array('ryan', 'bryan');
// echo $peopleTwo[0];

$ages = [20, 30, 40, 50];
// print_r($ages);

$ages[1] = 25;
// print_r($ages);

$ages[] = 60;
// print_r($ages);

array_push($ages, 70);
// print_r($ages);

// echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);


// associative arrays (key & valu pairs)

$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['mario'];
// print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
// print_r($ninjasTwo);

// $ninjasTwo['toad'] = 'pink';
$ninjasTwo['peach'] = 'pink';
// print_r($ninjasTwo);

// echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);


?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>