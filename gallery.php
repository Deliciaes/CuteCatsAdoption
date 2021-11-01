<?php

declare(strict_types=1);

require_once('header.php'); ?>

<h1>Meet our cats!</h1>
<article>We currently have <?php echo count($cats); ?> cats available for adoption.</article>

<h5><?php echo getCatsLastUpdated($file) ?></h5>



<form action="gallery.php" method="GET">
    <p><input type="radio" id="female" name="gender" value="female">
        <label for="female" id="radio-label">Females</label>
    </p>
    <p><input type="radio" id="male" name="gender" value="male">
        <label for="male">Males</label>
    </p>
    <p> <input type="radio" id="all" name="gender" value="all">
        <label for="all">Show All</label>
    </p>

    <select name="sort" class="box">
        <option disabled selected value>Sort by:</option>
        <option value="name" name="Name">Name</option>
        <option value="age" name="Age">Age</option>
        <option value="eye color" name="Eye color">Eye color</option>
        <option value="fur color" name="Fur color">Fur color</option>
    </select>
    <button type="submit">Sort</button>
</form>

<div class="blue">
    <p><?php
        // if-statements looking at whether the user as selected male or female cats. "show all" does nothing which by result resets the choice to null.
        if (isset($_GET['gender'])) {
            if ($_GET['gender'] === 'female') {
                $catsByGender = array_filter($cats, function ($var) use ($femaleCats) {
                    return ($var['gender'] == $femaleCats);
                });

                $catsByGenderResult = array_values($catsByGender);
                $cats = $catsByGenderResult;
            } elseif ($_GET['gender'] === 'male') {
                $catsByGender = array_filter($cats, function ($var) use ($maleCats) {
                    return ($var['gender'] == $maleCats);
                });

                $catsByGenderResult = array_values($catsByGender);
                $cats = $catsByGenderResult;
            }
            $gender = $_GET['gender'];
            echo "Showing cats where gender = $gender. ";
        }
        // if the user picks a "sort by" option then the usort function will compare the value selected and return the array sorted by that value.
        if (isset($_GET['sort'])) {
            usort($cats, function ($sortby, $sorted) {
                $value = $_GET['sort'];
                return $sortby[$value] <=> $sorted[$value];
            });
            echo "Showing cats sorted by " . $_GET['sort'] . ".";
        }
        ?></p>
</div>

<div class="galleryparent">


    <div class="gallery"><?php
                            for ($i = 0; $i < count($cats); $i++) : ?>
            <div>
                <h3><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old.</h3>
                <img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="290px">
                <p> <?php echo ucwords($cats[$i]['name']); ?> has <?php echo ($cats[$i]['eye color']); ?> eyes and <?php echo $cats[$i]['fur color']; ?> fur.</p>
            </div>

        <?php endfor; ?>
    </div>

    <?php require_once('footer.php');
