<?php
namespace Codecademy;
function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}
echo markAnswer(true);
echo "\n";
echo markAnswer(false);
?>