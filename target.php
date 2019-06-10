<?php

class target
{
    public $name;
    public $life;
    public $level;
    public $type;
    public $strength;

    public function __construct ($name, $life, $level, $type, $strength)
    {
        $this->name = $name;
        $this->life = $life;
        $this->level = $level;
        $this->type = $type;
        $this->strength = $strength;

        
        $this->foo = 1;
        $this->bar = 2;
        $this->baz = new StdClass;
    }
}




// Just typecast it

// $array =  (array) $yourObject;

// From http://www.php.net/manual/en/language.types.array.php

//     If an object is converted to an array, the result is an array whose elements are the object's properties. The keys are the member variable names, with a few notable exceptions: integer properties are unaccessible; private variables have the class name prepended to the variable name; protected variables have a '*' prepended to the variable name. These prepended values have null bytes on either side.

// Example: Simple Object

// $object = new StdClass;
// $object->foo = 1;
// $object->bar = 2;

// var_dump( (array) $object );

// Output:

// array(2) {
//   'foo' => int(1)
//   'bar' => int(2)
// } 

// Example: Complex Object

// class Foo
// {
//     private $foo;
//     protected $bar;
//     public $baz;

//     public function __construct()
//     {
//         $this->foo = 1;
//         $this->bar = 2;
//         $this->baz = new StdClass;
//     }
// }

// var_dump( (array) new Foo );

// Output (with \0s edited in for clarity):

// array(3) {
//   '\0Foo\0foo' => int(1)
//   '\0*\0bar' => int(2)
//   'baz' => class stdClass#2 (0) {}
// }

// Output with var_export instead of var_dump:

// array (
//   '' . "\0" . 'Foo' . "\0" . 'foo' => 1,
//   '' . "\0" . '*' . "\0" . 'bar' => 2,
//   'baz' => 
//   stdClass::__set_state(array(
//   )),
// )
