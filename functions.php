<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');
require __DIR__ . ('/catsdata.php');

//shuffles the catQuotes array and returns the first quote.
function getRandomQuote($catQuotes)
{
    shuffle($catQuotes);
    return $catQuotes[0];
}

// this function looks at the date when catsdata.php was last updated and returns that date.
function getCatsLastUpdated($file)
{
    if (file_exists($file))
        return "The list of available cats was last updated on: " . date("F d Y", filemtime($file));
}


//this function for bringing up a specific cat's information. is currently used in the randomized section but can also for example be used when displaying a specific cat after clicking on it (not yet implemented).
function getCatInfo($cats)
{
    foreach ($cats as $cat) {
        return ucwords($cat['name']) . " is a " . $cat['age'] . " year old cat. " . ucwords($cat['pronoun']) . " fur is " . $cat['fur color'] . " and " . $cat['pronoun'] . " eyes are " . $cat['eye color'] . ".";
    }
}
//returns a cat photo. This is separated from the above function to allow for styling.
function getCatPhoto($cats)
{
    foreach ($cats as $cat) {
        return $cat['photo'];
    }
}
