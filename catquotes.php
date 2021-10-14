<?php

declare(strict_types=1);


function getQuote()
{
    $catQuotes = [

        'Here is a cute cat. Amazing!',
        'One cat, coming up! What do you think?',
        'I hope you love this cat as a much as I do.',
        'It is dangerous to go alone. Take this!',
        'He is so fluffy.',
    ];

    shuffle($catQuotes);
    foreach ($catQuotes as $quote)
        return $quote;
}

$quote = getQuote();

echo $quote;
?>

<button onClick="window.location.reload();">Refresh Page</button>
