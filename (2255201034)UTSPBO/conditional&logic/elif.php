<?php
namespace Codecademy;
function whatRelation($percentage) {
    if ($percentage == 100) {
        echo "identical twins";
    } elseif ($percentage >= 35 && $percentage <= 99) {
        echo "parent and child or full siblings";
    } elseif ($percentage >= 14 && $percentage <= 34) {
        echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
    } elseif ($percentage >= 6 && $percentage <= 13) {
        echo "first cousins";
    } elseif ($percentage >= 3 && $percentage <= 5) {
        echo "second cousins";
    } elseif ($percentage >= 1 && $percentage <= 2) {
        echo "third cousins";
    } elseif ($percentage == 0) {
        echo "not genetically related";
    } else {
        echo "Invalid input. The percentage should be between 0 and 100.";
    }
}
echo whatRelation(78);
echo "\n";
echo whatRelation(32);
echo "\n";
echo whatRelation(12);
?>