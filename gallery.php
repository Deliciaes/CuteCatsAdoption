<?php require_once('header.php'); ?>

<h1>Meet our cats!</h1>
<article>We currently have <?php echo count($cats); ?> cats available for adoption.</article>

<h5>This list was last updated on: <?php echo getCatsLastUpdated($file) ?></h5>


<div class="gallery">
    <?php sort($cats);
    for ($i = 0; $i < count($cats); $i++) : ?>
        <div><img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="300px">
            <p><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old.</p>
        </div>

    <?php endfor; ?>





    <?php require_once('footer.php'); ?>
