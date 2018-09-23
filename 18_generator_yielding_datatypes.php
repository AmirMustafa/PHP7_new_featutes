<?php
// generator yielding datatypes
// associative array and object of class can also be used in yield function

function values2() {
    yield function() { echo 'hello world!'; };
}

$c = values2();
foreach($c as $v) {
    $v();
}


class MyObj {  }

function values(){
    yield from ['string', 'array', 100];
    yield  from array("hello" => 100, "key" => "key2"); // only values are printed and not keys

    /* yield ['string', 'array', 100];

    yield array("hello" => 100, "key" => "key2");

    yield new MyObj; */
}

$control = values();

// shorter way of writing, rather than repetitive current() and next() calling like below commented
foreach($control as $v){    // $v holds all yield i.e. looping on different yield statements
    echo '<br>' . json_encode($v, JSON_PRETTY_PRINT);
}

// primitive type data
/* function values(){
    yield 'string';

    yield 100;

    yield 100.11;

    yield true;
}

$control = values();

// shorter way of writing, rather than repetitive current() and next() calling like below commented
foreach($control as $v){    // $v holds all yield i.e. looping on different yield statements
    echo '<br>' . $v;
} */

/*
echo $control->current();

$control->next();
echo '<br>' .$control->current();

$control->next();
echo '<br>' .$control->current();

$control->next();
echo '<br>' .$control->current(); */
