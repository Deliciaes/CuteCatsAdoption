<?php require_once('header.php'); ?>

<p>Meet our cats!</p>
<p>We currently have <?php echo count($cats); ?> cats in our cat café.</p>
<p><?php if (file_exists($file)) : ?>
        Last updated on <?php echo date("F d Y", filemtime($file)); ?>.
    <?php endif ?> </p>

<div class="gallery">
    <?php for ($i = 0; $i < count($cats); $i++) : ?>
        <div><img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="300px">
            <p><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old.</p>
        </div>

    <?php endfor; ?>


</div>


<?php require_once('footer.php'); ?>
