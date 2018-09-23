<?php
// generators syntax

// PHP generator functions
function satNav() {
    $distance = 0;

    echo 'Start from driveway.';

    yield '<br/>1st Stop.';             // 1st stop - 1st return on 1st invoke

    echo '<br/>Take a left.';

    yield '<br/>Second stop sign.';     // 2nd stop - 2nd return on 2nd invoke

    echo '<br/>Destination reached.';

    echo 'Your journey was '. $distance .' miles';
}
$control = satNav();    // invoking a function is returns object
$current1 = $control->current();    // current method
echo $current1;
echo $current1 . 'amir';    // we have done various actions outside the function like concat
echo $control->current();    // current method - current point returns the first yield point

$control->next();   // next method hit the accelerator - i.e. now return data data before 2nd yield point
$current2 = $control->current();
echo $current2;
$control->next();   // gets data before 3rd yield point
// normal/reglar function is important in giving all execution before current yield point
/* function satNav() {
    $distance = 0;

    echo 'Start from driveway.';

    echo '<br/>1st Stop.';

    echo '<br/>Take a left.';

    echo '<br/>Second stop sign.';

    echo '<br/>Destination reached.';

    echo 'Your journey was '. $distance .' miles';
}
satNav();
*/


