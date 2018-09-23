<?php
// session options

session_start([
'cache_limiter' => 'private',
'read_and_close' => false,      // this option is new in PHP7
]);

$_SESSION['name'] ="Amir";

?>
<a href="loggedin.php">Logged in</a>
