<?php require_once('header.php'); ?>


<p>We want to help as many cats as possible by freeing up space in our centre for emergency cases, as well as helping some of our cats who have been with us longer to find a lovely new home. We're also keen to provide potential owners with their purrfect match.</p>
<p>Please visit the "Our Cats" section to view available cats, or click the button below to display a random cat.</p>
<div class="randomcat">
    <button onClick="window.location.reload();">Show me another cat!</button>
    <div><?php echo $quote ?></div>
    <div class="catinfo">
        <?php shuffle($cats);
        foreach ($cats as $cat);
        print ucwords($cat['name']) . " is a " . $cat['age'] . " year old cat. " . ucwords($cat['pronoun']) . " fur is " . $cat['fur color'] . " and " . $cat['pronoun'] . " eyes are " . $cat['eye color']; ?>.
    </div>
    <p><img src="<?php echo $cat['photo'] ?>" width="350px"></p>
</div>

</div>


<?php require_once('footer.php'); ?>
