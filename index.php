<?php 
require_once("animal.php");

echo "<h2> Latihan OOP PHP </h2> <br>";

$sheep = new Animal("shaun",4);
echo "Name : ", $sheep->name;
echo "<br>";
echo "legs: ",  $sheep->legs;
echo "<br>";
echo "cold blooded : ", $sheep->cold_blooded;
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
echo "Name : ", $kodok->name;
echo "<br>";
echo "legs : ", $kodok->legs;
echo "<br>";
echo "cold blooded : ", $kodok->cold_blooded;
echo "<br>";
echo "Jump : ";
$kodok->jump() ; 
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : ", $sungokong->name;
echo "<br>";
echo "legs : ", $sungokong->legs;
echo "<br>";
echo "cold blooded: ", $sungokong->cold_blooded;
echo "<br>";
echo "Yell : ";
$sungokong->yell() ;
echo "<br>";
?>