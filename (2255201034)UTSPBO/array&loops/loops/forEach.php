<?php
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];
foreach ($scores as $score) {
  echo "Someone received a score of $score.\n";
}

foreach ($scores as $key=>$value) {
  echo "$key received a score of $value.\n";
}
?>