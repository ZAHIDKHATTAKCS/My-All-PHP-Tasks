<?php

// Now we will learn about how to count the number of words in a sentence, note that it will not count the whitespaces, full stop and special character like strlen() function.

$a="Hello guys, good morning today we will learn about strlen function in PHP";

$WordsCount= str_word_count($a);

echo "The number of words in this sentence is =".$WordsCount;
?>