<?php require_once('header.php'); ?>

<p>Meet our cats!</p>
<p>We currently have <?php echo count($cats); ?> cats for adoption.</p>
<p>
    This list was last updated on
    <?php echo $catsLastUpdated ?> </p>

<div class="gallery">
    <?php sort($cats);
    for ($i = 0; $i < count($cats); $i++) : ?>
        <div><img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="300px">
            <p><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old.</p>
        </div>

    <?php endfor; ?>





    <?php require_once('footer.php'); ?>
