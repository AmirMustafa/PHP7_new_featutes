<?php
// functional call context

// creating object when storing function (not named function) in a variable
$context =function(){
    echo var_dump($this);
    echo $this->prop;       // can also access like class
};

// $context();
class newObj { public $prop = "hello world"; }  // created basic class

$context->call( new newObj );
