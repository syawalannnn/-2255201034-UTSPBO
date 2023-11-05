<?php
namespace Codecademy;
function truthyOrFalsy($value) {
    if ($value) {
        return "True";
    } else {
        return "False";
    }
}
$value1 = 42;
$value2 = 0;

$result1 = truthyOrFalsy($value1);
$result2 = truthyOrFalsy($value2);

echo "Value 1 is $result1\n";
echo "Value 2 is $result2\n";
?>