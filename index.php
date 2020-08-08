<?php

function magic8ball(){
  echo "What is your question?\n";
  $question = readline(">> ");
  echo "\nDetermining the correct answer to the question:\n $question... \n Ok, here is your answer: ";
  $number = rand(0, 19);
  // echo $number;
  switch ($number) {
    case 0:
      echo "It is certain\n";
      break;
    case 1:
      echo "It is decidedly so.\n";
      break;
    case 2:
      echo "Without a doubt.\n";
      break;
    case 3:
      echo "Yes - definitely\n";
      break;
    case 4:
      echo "As I see it, yes.\n";
      break;
    case 5:
      echo "Most likely.\n";
      break;
    case 6:
      echo "Outlook good.\n";
      break;
    case 7:
      echo "Yes.\n";
      break;
    case 8:
      echo "Signs point to yes.\n";
      break;
    case 9:
      echo "Reply hazy, try again.\n";
      break;
    case 10:
      echo "Ask again later.\n";
      break;
    case 11:
      echo "Better not tell you now.\n";
      break;
    case 12:
      echo "Cannot predict now.\n";
      break;
    case 13:
      echo "Concentrate and ask again.\n";
      break;
    case 14:
      echo "Don't count on it.\n";
      break;
    case 15:
      echo "My reply is no.\n";
      break;
    case 16:
      echo "My sources say no.\n";
      break;
    case 17:
      echo "Outlook not so good.\n";
      break;
    case 18:
      echo "Very doubtful.\n";
      break;
    case 19:
      echo "Probably not... sorry.\n";
      break;
  };
};

magic8ball();