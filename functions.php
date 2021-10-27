<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');
require __DIR__ . ('/catsdata.php');


function getRandomQuote($catQuotes)
{
    shuffle($catQuotes);
    return $catQuotes[0];
}


function getCatsLastUpdated($file)
{
    if (file_exists($file))
        return "The list of available cats was last updated on: " . date("F d Y", filemtime($file));
}


function sanitizeForm($name)
{
    return (filter_var($name, FILTER_SANITIZE_STRING));
}

function getCatInfo($cats)
{
    foreach ($cats as $cat) {
        return ucwords($cat['name']) . " is a " . $cat['age'] . " year old cat. " . ucwords($cat['pronoun']) . " fur is " . $cat['fur color'] . " and " . $cat['pronoun'] . " eyes are " . $cat['eye color'] . ".";
    }
}

function getCatPhoto($cats)
{
    foreach ($cats as $cat) {
        return $cat['photo'];
    }
}
