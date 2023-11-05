<?php
namespace Codecademy;
function chooseCheckoutLane($items)
{
  if ($items <= 12) {
    return "express lane";
  } else {
    return "regular lane";
  }
}
function canIVote($age)
{
  if ($age >=18) {
    return "yes";
  } else {
    return "no";
  }
}

echo chooseCheckoutLane(10);
echo "\n";
echo chooseCheckoutLane(13);
echo "\n";
echo canIVote(19);
echo "\n";
echo canIVote(16);
?>