<?php
// anonymous classes

// $framework = class {}     - anonymous class properties and methods like any other classes

    // anonymous class can be instatiated only once - good for security reasons

    //eg 4 - implements interface as well

    interface reg {
        public function print();
    }
    $framework = new class implements reg{    // passing constructor value here
        public function print() {
            echo 'hello again from interface function';
        }
    };

    // eg3 - anonymous class extends a class
    /*  class MyObj {
        public $hello = 'say hello';
    }
    $framework = new class( "read only param" ) extends MyObj{    // passing constructor value here
        private $readOnly;
        function __construct( $ro ) {
            $this->readOnly = $ro;
        }
        public function printNew() {
            echo $this->readOnly;
        }

        public static function hello() {
            echo 'hello';
        }
    }; */

    // eg2 - using constructors
    /* $framework = new class( "read only param" ){    // passing constructor value here
        private $readOnly;
        function __construct( $ro ) {
            $this->readOnly = $ro;
        }
        public function printNew() {
            echo $this->readOnly;
        }

        public static function hello() {
            echo 'hello';
        }
    }; */ //must be closing ;

    // eg1
    /* $framework = new class {
        private $readOnly = "read only value";
        public function printNew() {
            echo $this->readOnly;
        }

        public static function hello() {
            echo 'hello';
        }
    }; */

    /* $framework->printNew(); // o/p - read only value
    $framework::hello();    // accessing static methods */

    // echo $framework->hello;

    $framework->print();
