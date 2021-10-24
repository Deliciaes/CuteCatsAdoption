<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');
require __DIR__ . ('/catsdata.php');


function getQuote($catQuotes)
{
    shuffle($catQuotes);
    foreach ($catQuotes as $quote)
        return $quote;
}

$quote = getQuote($catQuotes);
