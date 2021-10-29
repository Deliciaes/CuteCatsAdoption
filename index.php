<?php require_once('header.php'); ?>

<h1>Cute Cats Adoption Center - We have the cutest cats!</h1>
<article>
    <p>We want to help as many cats as possible by freeing up space in our centre for emergency cases, as well as helping some of our cats who have been with us longer to find a lovely new home.</p>
    <p>We are also keen to provide potential owners with their purrfect match.</p>
    <p>Please visit the "Our Cats" section to view available cats, or click the button below to display a random cat.</p>
</article>
<div class="randomcat">
    <h2>Click on the button below to see a random cat that is waiting for a new home!</h2>
    <button onClick="window.location.reload();">Show me another cat!</button>
    <div><?php echo getRandomQuote($catQuotes); ?></div>
    <div class="catinfo">
        <?php
        shuffle($cats);
        echo getCatInfo($cats); ?>
    </div>
    <p><img src="<?php echo getCatPhoto($cats); ?>" width="350px"></p>
    <p>
    <h5><?php echo getCatsLastUpdated($file) ?></h5>
    </p>
</div>




<?php require_once('footer.php');
