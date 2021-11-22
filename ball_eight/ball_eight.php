<?php
  function magic8Ball() {
    echo "What is your question? Remember... It has to be a Yes/No answer.\n";
    $question = readline(">> ");
    echo "...Processing question...\nInteresting\nSo your question was '{$question}'...\n";
    $answer = rand(0, 19);
    $my_answers_list = ["It is certain.", "It is decidedly so.", "Withouth a doubt.", "Yes - definitely.", "You may rely on it.", "As I see it, yes.", "Most likely.", "Outlook good.", "Outlook good.", "Yes.", "Signs point to yes.", "Reply hazy, try again.", "Ask again later.", "Better not tell you now.", "Cannot predict now.", "Concentrate and ask again.", "Concentrate and ask again.", "Don't count on it.", "My reply is no.", "My source say no.", "Outlook not so good.", "Very doubtful."];
    return "{$my_answers_list[$answer]}\n";
  };

  echo magic8Ball();