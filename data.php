<?php

declare(strict_types=1);

// indexed array

$catQuotes = [

    'Here is a cute cat. Amazing!',
    'One cat, coming up! What do you think?',
    'I hope you love this cat as a much as we do.',
    'Would you adopt me?',
    'Omg... So. Fluffy!',
    'This cat is irresistable!',
];

// associative array

$company = [
    'name' => 'Cute Cats Adoption Center',
    'email' => 'info@cutecatsadoption.co.uk',
    'phone' => 123456789,
    'openingHours' => 'Mon-Fri, 08:00-17:00',
    'address' => '19 Station Street, Belfast BT3 9DA, Northern Ireland',
];

//multidimensional array

$stories = [
    ['Read More'],
    ['name' => 'Emma', 'catName' => 'Ninis', 'comment' => "\"Adopting from Cute Cats was super easy\"", 'photo' => 'photos/emmasstory.png'],
    ['name' => 'Anna', 'catName' => 'Smulan', 'comment' => "\"I would recommend Cute Cats to anyone looking to adopt a cat\"", 'photo' => 'photos/annasstory.png'],
    ['name' => 'Simon', 'catName' => 'Mittens', 'comment' => "\"I am so happy to have been able to give Mittens a forever home\"", 'photo' => 'photos/simonsstory.png'],
];

$readMore = $stories[0][0];
$file = 'catsdata.php';
$prizeOfTheWeek = '1kg cat food';
$latestWinner = 'Simon';
$lastPrize = '1kg cat sand';
$femaleCats = 'female';
$maleCats = 'male';
