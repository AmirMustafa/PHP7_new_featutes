<?php
// unserialize filtering

class MyObj {
    public $prop ="hello world";
    private $priv = "This is private to the object";
    private $arr = [20, 200, 500, 600];
}

$data =serialize( new MyObj );
echo $data;

$unserialized =unserialize($data, [ "allowed_classes" => ["Cake","MyObj"] ]);
echo '<br><br>' . $unserialized->prop . '<hr>';
echo '<br><br>' . var_export($unserialized);
