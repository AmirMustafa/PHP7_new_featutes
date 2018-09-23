<?php
// revamped regular expression function

$subject = "Aaaabaa aa Bbb bb bbb";
echo 'Subject to analyse: <b>' . $subject . "</b><br/><br/><br/>";
$numOfMatches;
// 4th parameter is number of matches found - optional
preg_replace_callback_array([
    '`[a]+`i' => function($match){ echo $match[0] . ' match found for [a] <br><br>'; },
    '`[b]+`i' => function($match){ echo $match[0] . ' match found for [b] <br><br>'; }
], $subject,-1, $numOfMatches);

echo $numOfMatches;
/* // pregmatch plus limit - 1, 2 etc for each match i.e.if set to 1 i.e. return 1st match for a and for b - opional
preg_replace_callback_array([
    '`[a]+`i' => function($match){ echo $match[0] . ' match found for [a] <br><br>'; },
    '`[b]+`i' => function($match){ echo $match[0] . ' match found for [b] <br><br>'; }
], $subject, 1); */

// preg match with regular expression
/* preg_replace_callback_array([
    '`[a]+`i' => function($match){ echo $match[0] . ' match found for [a] <br><br>'; },
    '`[b]+`i' => function($match){ echo $match[0] . ' match found for [b] <br><br>'; }
], $subject); */
