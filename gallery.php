<?php require_once('header.php'); ?>

<h1>Meet our cats!</h1>
<article>We currently have <?php echo count($cats); ?> cats available for adoption.</article>

<h5><?php echo getCatsLastUpdated($file) ?></h5>

<div class="galleryparent">
    <div class="gallery">
        <?php sort($cats);
        for ($i = 0; $i < count($cats); $i++) : ?>
            <div class="catimg"><img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="300px">
                <p><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old.</p>
            </div>

        <?php endfor; ?>
    </div>




    <?php require_once('footer.php'); ?>
