<?php
  function generateStory($singular_noun, $verb, $color, $distance_unit) {
    $story = "The ${singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd miles to go before I sleep.\n\n";
    return $story;
  };

echo generateStory("cat", "jump", "black", "miles");
echo generateStory("Sophie", "bark", "green", "kilometers");
echo generateStory("table", "sit", "orange", "centimeters");