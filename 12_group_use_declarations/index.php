<?php

require 'namespace.php';
// PHP7 - grouping multiple use statements together
use amir\complicated\{Hello, AnotherLoz as al};     // grouping all class targeting use

// using alias
$object =new Hello;
$object2 =new al;

echo "<br/><br/> <h2>Functions:</h2> <br/><br/>";
use function amir\complicated\{all, all2 as a2}; // grouping all function targeting use

all();  // invoking function
a2();

echo "<br/><br/> <h2>Constants:</h2> <br/><br/>";

use const amir\complicated\{HELLO, GOODBYE as GB};  // grouping all constants targeting use
echo HELLO;
echo GB;

// a step further wih alias - smarter way
/*use amir\complicated\Hello;
use amir\complicated\AnotherLoz as al;

// using alias
$object =new Hello;
$object2 =new al;

echo "<br/><br/> <h2>Functions:</h2> <br/><br/>";
use function amir\complicated\all;
use function amir\complicated\all2 as a2;

all();
a2();

echo "<br/><br/> <h2>Constants:</h2> <br/><br/>";

use const amir\complicated\HELLO;
use const amir\complicated\GOODBYE as GB;
echo HELLO;
echo GB; */


/* use amir\complicated as amir;

// using alias
$object =new amir\Hello;
$object2 =new amir\AnotherLoz;

echo "<br/><br/> <h2>Functions:</h2> <br/><br/>";

amir\all();
amir\all2();

echo "<br/><br/> <h2>Constants:</h2> <br/><br/>";

echo amir\HELLO;
echo amir\GOODBYE; */

// full namespace
/* $object =new amir\complicated\Hello;
$object2 =new amir\complicated\AnotherLoz;

echo "<br/><br/> <h2>Functions:</h2> <br/><br/>";

amir\complicated\all();
amir\complicated\all2();

echo "<br/><br/> <h2>Constants:</h2> <br/><br/>";

echo amir\complicated\HELLO;
echo amir\complicated\GOODBYE; */
