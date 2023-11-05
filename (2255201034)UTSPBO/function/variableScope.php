<?php

$language = "PHP";
$topic = "scope";

function generateLessonName($language, $concept)
{
  return $language . ": " . $concept;
}

echo generateLessonName($language, $topic);
?>