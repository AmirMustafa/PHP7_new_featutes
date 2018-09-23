<?php
// generating yielding values

function satNav() {

    $distance = 0;

    echo 'Start from driveway. <br>';

    $distance = yield;

    echo $distance . ' miles now take a left. <br/> ';

    $distance = yield;

    echo $distance . ' miles. <br> Destination reached.';
}

$control = satNav();
$control->current();

echo '<br>... Analysing distance ... <br><br>';

$control->send( 50 );

echo '<br2>... Analysing distance 2 ... <br><br>';

$control->send( 100 );
