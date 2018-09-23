<?php

/* function dataReturn(){
    return "This is what a function will give back";
} */llll

// int type return declaration
/* function dataReturn():int{
    return 20;
} */

/* // float type return declaration
function dataReturn():float{
    // return false;   // 0.0
    // return true;   // 1.0
    return 22.22;   // 22.2922424
} */

/* // bool type return declaration
function dataReturn():bool{
    // return false;   // 0
    // return true;   // 1
    return 22.22;   // 1
} */

/* // bool type return declaration
function dataReturn():string{
    // return 20;   // "20"
    // return 22.22;   // "22.22"
    // return true;   // "1"
    // return false;   // ""
} */

// array type return declaration
/* function dataReturn():array{
    // return array(20,'hello world');     // numeric array returned
    return array('hello' => 20);           // associative array returned
} */

// object type return declaration
/* interface register {}
class MyObj implements register {};
class Cake implements register {};
function dataReturn():register{
    return new Cake;
} */

// callable type return declarations
/* function dataReturn():callable{
    // return function() { echo "hello"; };    // OK - Closure::__set_state(array( ))
    return array(20,300);
} */

// self return type declaration
class MyObj {
    function dataReturn($object):self{
        return $object;
    }
}
class Cake {}
$a = new MyObj;

echo var_export( $a->dataReturn( new MyObj ) );  // OK
// echo var_export( $a->dataReturn( new Cake ) );  // ERROR - instance must be of the same class
