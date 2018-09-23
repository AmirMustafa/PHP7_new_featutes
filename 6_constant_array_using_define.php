<?php
// constant arrays using define

const PERSON = array('PERSON', 200, true);

Define( 'OFFICE', array('OFFICE', 400, true) );
echo json_encode(PERSON, JSON_PRETTY_PRINT) . '<br><br>' . json_encode(OFFICE, 128) ;

// note JSON_PRETTY_PRINT = 128, so one can use any for prettyfying it
