<?php
// PHP 7 depricated features

// old style constructor deprication cancelled i.e. class name same as construor name

class myClass {
    function myClass($arg1) {
        $this->createProp = $arg1;
    }
}
$test = new myClass("old style constructor");
echo $test->createProp;
echo '<br/>----------------------------------------------------------------------------<br>';

// abiliy to call non static member in a static way
class myClass2 {
    static function a() {echo 'static method';}
    function b() {echo 'non static method';}
}
echo myClass2::a(); // calling static method is ok
echo myClass2::b(); // calling non static method will soon be removed

echo '<br/>----------------------------------------------------------------------------<br>';

// now cannot set our own salt in password_hash();

echo password_hash("your_password", PASSWORD_DEFAULT, array(
    // 'salt' => 'dsdsdsddfdfdfdsdsdsdsd',
    'cost' => 12
));

echo '<br/>----------------------------------------------------------------------------<br>';

// stream_get_meta_data() now accepts one parameter

$fp =fopen('http://php.net/manual/en/function.password-hash.php', 'r');
$meta =stream_get_meta_data($fp);

echo '<pre>' .json_encode($meta, JSON_PRETTY_PRINT) . '</pre>';

function test() {
    return array(200);
}
$arr = test()[0];
echo $arr;
