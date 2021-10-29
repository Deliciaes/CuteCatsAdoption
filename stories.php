<?php require_once('header.php'); ?>

<h1>Stories</h1>
<div class="blueparent">
    <div class="blue">
        <h2>Share your story for a chance to win <?php echo $prizeOfTheWeek ?>!</h2>
        <article>
            <p>Last winner was <?php echo $latestWinner ?> who won <?php echo $lastPrize ?>. Congratulations!</p>
        </article>
    </div>
</div>
<article>
    <p>We have many successful adoptions. Here are some of them.</p>
</article>

<div class="storiesparent">
    <div class="stories">
        <?php for ($i = 1; $i < count($stories); $i++) : ?>
            <div class="storycard">
                <h2><?php echo $stories[$i]['name']; ?> and <?php echo $stories[$i]['catName']; ?></h2>
                <p><img src="<?php echo $stories[$i]['photo']; ?>" alt="<?php echo $stories[$i]['name']; ?> with their adopted cat <?php echo $stories[$i]['catName']; ?>"></p>
                <p> </p><?php echo $stories[$i]['comment']; ?><p><a href="#"><?php echo $readMore ?></a> </p>
            </div>
        <?php endfor; ?>


    </div>
</div>




<?php require_once('footer.php');
