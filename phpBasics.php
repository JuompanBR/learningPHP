<?php
$username = "Goummo Bill";
$address = "780 Toyota Street, Bonapriso, Douala";
$message = "This is inside php";

echo "Your username is : \"$username\" and your address is : \"$address\"";

// check the variable type in php
echo var_dump(PHP_FLOAT_MAX);

// php numeric values boundaries
echo ("PHP_FLOAT_MAX PHP_FLOAT_MIN PHP_FLOAT_DIG PHP_FLOAT_EPSILON");

// passing variables by reference
function modifyValue(&$value) {
    $value = $value * 2;
}

$number = 10;
modifyValue($number);

echo $number;  // Outputs: 20

// type modifiers
// 4.6 abstract, final, and static
// When present, the abstract and final declarations MUST precede the visibility declaration.

// When present, the static declaration MUST come after the visibility declaration.

namespace Vendor\Package;

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim();

    final public static function bar()
    {
        // method body
    }
}


?>