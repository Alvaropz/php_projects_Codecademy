<?php
echo "while loop: \n";
$counter = 1;
while ($counter <= 100) {
  if ($counter % 15 === 0) {
    echo "FizzBuzz";
  } elseif ($counter % 3 === 0) {
    echo "Fizz";
  } elseif ($counter % 5 === 0) {
    echo "Buzz";
  } else {
    echo $counter;
  }
  echo "\n";
  $counter++;
}

$output = [];
for ($counter = 1; $counter <= 100; $counter++) {
  if ($counter % 15 === 0) {
    array_push($output, "FizzBuzz");
  } elseif ($counter % 3 === 0) {
    array_push($output, "Fizz");
  } elseif ($counter % 5 === 0) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $counter);
  }
}

echo "For each loop: \n";
foreach ($output as $value) {
  if ($value === "Fizz") {
    continue;
  } elseif ($value === "FizzBuzz") {
    echo $value;
    break;
  }
  echo $value . "\n";
}