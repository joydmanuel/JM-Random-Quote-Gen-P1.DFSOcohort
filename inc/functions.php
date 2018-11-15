<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// Step 2. In my PHP file, I created multidimensional (arrays within arrays) arrays. Declared array and assigned data to the variable quotes. I used quotes as my outer most array.
// (each array element requires a key)

$quotes = [
    [
        "quote" => "there's nothing to fear, but fear itself",
        "source" => "Joe Karasek",
    ],
    [
        "quote" => "PHPStorm is amazing",
        "source" => "New student",
    ],
    [
        "quote" => "E.T. phone home",
        "source" => "E.T.",
    ],
    [
        "quote" => "Coding is not that hard, once you know what you are doing",
        "source" => "Joe and Joy",
    ],

];
//    var_dump($quotes);
//
// Create the getRandomQuote function and name it getRandomQuote
// random quotes selected within the variable array. DECLARE FUNCTION (HIRED & TOLD IT TO DO SOMETHING)
function getRandomQuote($array)
{
    $myRandomNumber = rand(0, 3);
    $selectedQuote = $array[$myRandomNumber];
    return $selectedQuote;
};

//$myQuote = getRandomQuote($quotes);
//var_dump($myQuote);
//var_dump(getRandomQuote($quotes));

// Create the printQuote function and name it printQuote
// PrintQuote returns html string with random quote contents. var_dump dumps the data with string info. return did not display quotes. echo displays it as it should be.
function printQuote($array)
{
    $myQuote = getRandomQuote($array);
    $mytemplate = "<p class=\"quote\">" . $myQuote["quote"] . "</p><p class=\"source\">". $myQuote["source"] . "</p>";
    return $mytemplate;
};

$aQuote = printQuote($quotes);
//echo $aQuote;
