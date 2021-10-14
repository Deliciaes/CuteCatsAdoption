<?php

function getCat()
{
    $cats = [

        ['name' => 'Charlie', 'age' => 8, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'blue', 'photo' => '/photos/charlie.png'],
        ['name' => 'Busen', 'age' => 4, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'yellow', 'photo' => '/photos/busen.png'],
        ['name' => 'Pip', 'age' => 4, 'gender' => 'female', 'pronoun' => 'her', 'fur color' => 'black', 'eye color' => 'yellow', 'photo' => '/photos/pip.png'],
        ['name' => 'Nisse', 'age' => 4, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'multicolored', 'eye color' => 'green', 'photo' => '/photos/nisse.png'],
        ['name' => 'Kylo', 'age' => 2, 'gender' => 'male', 'pronoun' => 'his', 'fur color' => 'black', 'eye color' => 'yellow', 'photo' => '/photos/kylo.png'],
    ];
    shuffle($cats);
    foreach ($cats as $cat)
        return ucwords($cat['name']) . " is a " . $cat['age'] . " year old cat. " . ucwords($cat['pronoun']) . " fur is " . $cat['fur color'] . " and " . $cat['pronoun'] . " eyes are " . $cat['eye color'] . $cat['photo'];
}

$cat = getCat();


echo $cat;
?>

<button onClick="window.location.reload();">Refresh Page</button>
