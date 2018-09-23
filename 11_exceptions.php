<?php
// expectations

// $num = "hello";
// PHP7 - different assert() 2nd parameters changed
ini_set('assert.exception', 1);
class HandelError extends AssertionError {

}
$num = 100;
assert($num > 200, new HandelError('some error text'));

// PHP7 - different assert() 1st parameters changed
/* $num = 100;
assert( is_numeric($num), 'This is an error string' );
assert(false, 'This is an error string');    // check boolean in PHP7
assert(0, 'This is an error string');    // check boolean in PHP7
assert($num > 200, 'This is an error string');    // check boolean in PHP7 */
