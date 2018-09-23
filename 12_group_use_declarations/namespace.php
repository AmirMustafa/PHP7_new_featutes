<?php
// group use declarations

namespace amir\complicated;

class Hello{
    function __construct () { echo "created loz"; }
}

class AnotherLoz {
    function __construct(){ echo "<br><br>created another loz"; }
}

function all(){ echo "all"; }
function all2(){ echo "<br/>another<br/>"; }

const HELLO = "hello";
const GOODBYE = "<br/>goodbye";

