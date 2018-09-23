# PHP7_new_featutes
This repository deals with all the latest PHP 7 powerful features and depricated features. Feel free to fork and get updated with PHP 7

## Requirements
- For Windows install XAMPP, WAMP and so on with package of version minimum 7.0.1 dev environment
- For Linux/Macintos intall PHP Stack of package minimum 7.0.1 dev environment

## New Features

1. Primitive type declatration - string, boolean, float, int, polymorphism facility in PHP7
2. Object type declaration - array, callable, class type declaration, interface use for checker, self type declaration
3. Return type declaration - string, boolean, float, int, array, callable, class type declaration, interface use for checker, self type declaration
4. Null Coaleascing Operator
5. Spaceship Operator
6. Constant arrays using define
7. Anonymous Classes - This is generally used to instantiate class only once like for creating framework, it might have only 1 instantiation
8. Unicode codepoint escape syntax - eg. echo "\u{2200}";
9. Functional call context - i.e. use $this in some other function
10. Unserialize Filtering - second parameter of unserialize takes extra layer of security i.e. list of allowed classes.
11 Expectation / Assertion function - now assert function accepts all more functionality in parameter one like conditional check etc. and in second parameter we can throw error in class form rather than direct
12. Group use declaration - now declarating namespace of different classes, methods and constants can be grouped together respectively.
13. Integer Division - a sweet small function now lets you divide i.e. int(10, 3); o/p - 3
14. Session Options - session_start can now be configured. see phpinfo various options settings to be changed
15. Random bytes and Random Int - eg.random_bytes( 100 ); random_int(10000, 100000000);
16. Revamped regular expressions function
17. PHP generators - use of return statements, linking two or more generators
18. PHP 7 depricated features - old style constructor, ability to call static members in a static way(will soon be depricated), password_has() can now no longer accept salt in third parameters accepts cost only, salt is computer generated, stream_get_meta_data($fp) now accepts 1 parameter no second parameter is required for SSL. It is auto done

Note - Name wise files are created for easy code traversing
##Looks

![Screenshot of PHP 7 image](https://user-images.githubusercontent.com/15896579/45925645-33ebd480-bf37-11e8-973e-c582d5dd1594.jpg?raw=true "Screenshot of PHP 7 image")
<br/><br/><br/>

## License

(The MIT License)

Copyright (c) 2016 Amir Mustfa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

