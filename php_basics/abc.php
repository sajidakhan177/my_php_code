<?php
/*
$x = 5;#global scope

function myfunc(){
    echo "x = $x";

}

#local scope
function myfunc()
{
    $x = 10;
    echo "<p>Variable x inside function is: $x</p>"."<br>";

#PHP The global Keyword
#The global keyword is used to access a global variable from within a function.

$x = 20;
function myfunc()

{
   global $x;
    echo "<p>Variable x inside function is: $x</p>"."<br>";
}*/


function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
myTest();
?>