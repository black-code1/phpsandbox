<?php

// multi-dimensonal arays

// $blogs = [
//   ['mario party', 'mario', 'lorem', 30],
//   ['mario kart cheats', 'toad', 'lorem', 25],
//   ['zelda hidden chests', 'link', 'lorem', 50]
// ];
$blogs = [
  ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'age' => 30],
  ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'age' => 25],
  ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'age' => 50]
];

// print_r($blogs[0][1]);
// print_r($blogs[0]['author']);
// echo count($blogs);

$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
// print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);

?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>