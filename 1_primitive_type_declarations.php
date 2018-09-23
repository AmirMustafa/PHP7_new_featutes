<?php
// echo 'PHP 7 running';

// function parse( ...$ints ){ // will keep array of all sent datatypes
// function parse( int ...$ints ){ //  int type coercision, ... indicate args is accepted as array, ints is variable that holds array
// function parse( float ...$ints ){ //  int type coercision, ... indicate args is accepted as array, ints is variable that holds array
function parse( string ...$ints ){ //  int type coercision, ... indicate args is accepted as array, ints is variable that holds array
    echo '<pre>'.json_encode( $ints).'</pre>';
    echo '<pre>'.print_r( $ints, JSON_PRETTY_PRINT ).'</pre>';
}

parse(20, "200.22",22.22, true);   // passing multiple datatype aruments
