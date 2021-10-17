<?php

declare(strict_types=1);

$cats = [

    ['name' => 'Charlie', 'age' => 8, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'blue', 'photo' => 'photos/charlie.png'],
    ['name' => 'Busen', 'age' => 4, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'yellow', 'photo' => 'photos/busen.png'],
    ['name' => 'Pip', 'age' => 4, 'gender' => 'female', 'pronoun' => 'her', 'fur color' => 'black', 'eye color' => 'yellow', 'photo' => 'photos/pip.png'],
    ['name' => 'Nisse', 'age' => 4, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'green', 'photo' => 'photos/nisse.png'],
    ['name' => 'Kylo', 'age' => 2, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'black', 'eye color' => 'yellow', 'photo' => 'photos/kylo.png'],
    ['name' => 'Ginny', 'age' => 11, 'gender' => 'female', 'pronoun' => 'her', 'fur color' => 'mluticolored', 'eye color' => 'green', 'photo' => 'photos/ginny.png'],
    ['name' => 'Pippa', 'age' => 11, 'gender' => 'female', 'pronoun' => 'her', 'fur color' => 'mluticolored', 'eye color' => 'yellow', 'photo' => 'photos/pippa.png'],
];
shuffle($cats);
foreach ($cats as $cat);



function getQuote()
{
    $catQuotes = [

        'Here is a cute cat. Amazing!',
        'One cat, coming up! What do you think?',
        'I hope you love this cat as a much as I do.',
        'It is dangerous to go alone. Take this!',
        'Omg... So. Fluffy!',
        'This cat is irresistable!',
    ];

    shuffle($catQuotes);
    foreach ($catQuotes as $quote)
        return $quote;
}

$quote = getQuote();



$author = [
    'name' => 'Emma Ramstedt',
    'alias' => 'Deliciaes',
    'publishDate' => 'English',
    'course' => 'Web devlopment',
    'class' => 'WU21 @Yrgo',
    'website' => 'https://github.com/Deliciaes',
];
