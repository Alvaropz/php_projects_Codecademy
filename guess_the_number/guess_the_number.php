<?php
  $play_count = 0;
  $correct_guesses = 0;
  $guess_high = 0;
  $guess_low = 0;
  echo "You must guess the number. The number is between 1 and 10 (both included). After completing all rounds, we will tell you how good you are guessing numbers. Good luck!\n";
  function guessNumber() {
    global $play_count;
    global $correct_guesses;
    global $guess_high;
    global $guess_low;
    $number_to_guess = rand(1, 10);
    echo "What is your number?\n";
    $answer = readline(">> ");
    $answer = intval($answer);
    if ($answer < 0) {
      echo "That value is below 0. It's not a valid input.\n";
      guessNumber();
    } elseif ($answer > 10) {
      echo "That value is above 10. It's not a valid input.\n";
      guessNumber();
    } else {
      $play_count++;
      echo "This is the round number {$play_count}, the chosen number was {$number_to_guess} and your number was {$answer}\n";
      if ($number_to_guess === $answer) {
        $correct_guesses++;
      } elseif ($number_to_guess < $answer) {
        $guess_high++;
      } else {
        $guess_low++;
      };
      if ($play_count < 10) {
        guessNumber();
      } else {
        $guess_percentage = ($correct_guesses / $play_count) * 100;
        echo "You have had a {$guess_percentage}% of right answers.\n";
        if ($guess_high > $guess_low) {
          echo "When you guessed wrong, you tended to guess high.";
        } else {
          echo "When you guessed wrong, you tended to guess low.";
        }
        echo "\n";
      }
    }
  };

  guessNumber();