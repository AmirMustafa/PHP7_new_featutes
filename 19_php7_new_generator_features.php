<?php
// PHP7 generators new features:

function values() {
    yield from Gen2();

    yield 300;

    return 500;
}

function Gen2(){
    yield 'This is from Gen2;';
    yield 'This is from Gen2 again';
}

/* function values() {
    yield 200;

    yield 300;

    return 500;
} */

$control = values();
foreach( $control as $v ) {
    echo '<br>' . $v;
}
echo '<br>' . $control->getReturn();

