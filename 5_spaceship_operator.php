<?php
// spaceship operator

//-1 less than (if left hand is less than right hand)
// 0  equal to (if left hand is equal to right hand)
// 1 greater than (if left hand is greater than right hand)

$spaceshipOperator = 2 <=> 2;   // 0
$spaceshipOperator = 200 <=> 2;// 1
$spaceshipOperator = 1 <=> 2;   //-1

// can also adopt polmorphism
$spaceshipOperator = 2 <=> '2';   // 0

// boolean can also adopt polmorphism
$spaceshipOperator = '0' <=> false;   // 0

// arrays with spaceship operator
$spaceshipOperator = array(20,20,20) <=> array(20,20,20);   // 0
$spaceshipOperator = array(200,20,20) <=> array(20,20,20);   // 1
$spaceshipOperator = array(200,20,20) <=> array(2000,20,20);   // -1
$spaceshipOperator = array(20,20,20,20) <=> array(200,20,20);   // 1
$spaceshipOperator = array(20,20,20,20) <=> array(200,20,20);   // -1
echo $spaceshipOperator;

if(array(200,20,20) <=> array(200,20,20)) {
    echo '<br>something happened';
}

