<?php require_once('header.php'); ?>
<div class="contents">
    We know what it is like. Sometimes you have one of those days where you just need to look at cute cats. Don't worry, we got you. Click on the button below to meet a cute cat!

    <div class="randomcat">
        <div><?php print $quote ?></div>
        <div><?php print ucwords($cat['name']) . " is a " . $cat['age'] . " year old cat. " . ucwords($cat['pronoun']) . " fur is " . $cat['fur color'] . " and " . $cat['pronoun'] . " eyes are " . $cat['eye color']; ?>.
            <button onClick="window.location.reload();">Show me another cat!</button>
            <img src="<?php echo $cat['photo'] ?>" width="350px">
        </div>

        Want to submit your own cat? Click here!
    </div>



</div>
<?php require_once('footer.php'); ?>
