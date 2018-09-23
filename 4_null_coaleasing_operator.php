<?php
echo 'a';
echo '<pre>'.json_encode($_GET, JSON_PRETTY_PRINT).'</pre>';

// null coaleasing with $_GET
echo $_GET['name'] ?? 'Amir';   // null coaleasing operator
echo '<br>';
// null coaleasing with variable that are not created
$a= 1;
echo $a ?? 'Data 2';
echo '<br>';


// chaining using null coaleasing operator
// $person = "John";
$myVal = $person ?? $_GET['val1'] ?? 'Amir';    // 1st priority extreme left to right
echo $myVal;

