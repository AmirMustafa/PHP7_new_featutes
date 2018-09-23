<?php
// object type declarations

// self declatation

class Cake {
    public function icing (self $thisCake){
        echo 'Cake to ice: <br>';
        echo var_dump($thisCake);
    }
}

$Cake1 = new Cake;
$Cake2 = new Cake;
$Cake2->icing( $Cake1 );
// checking interface with multiple class
/* interface Checker {}
class Cake implements Checker {  }
class Salad implements Checker {  }

function restaurant( Checker $food ){  // receive instance of only cake class
    echo var_dump($food);
}

// $box = new Cake();  // ok
$box = new Salad();  // error - class must implements checker salad given
restaurant( $box );*/

// class onjects passing as args
/* class Cake {  }
class Salad {  }

function restaurant( Cake $food ){  // receive instance of only cake class
    echo var_dump($food);
}

$box = new Cake();  // ok
// $box = new Salad();  // error
restaurant( $box ); */

// callable type declaration
/* function parse( callable $callback ){   // callback declaration
    echo "This string came from the parse function <br/><br/>";
    $callback();        // calling / invoking the callable function
}

parse( function(){ echo "CALLABLE FUNCTION - This string came from callable function"; } ); */
// passing function as an arguments

// array type declaration
/* function parse( array $kit ){
    echo '<pre>'. json_encode($kit, JSON_PRETTY_PRINT).'</pre>';
}

$arr =array("hello", "world", "another", "word");
// $arr =array("a"=>"hello", "b"=>"world", "c"=>"another", "d"=>"word");
// parse( 'hiiii' );
parse( $arr );
 */
