<?php require_once('header.php'); ?>
<div class="contents">
    <p>Here are all of our cats!</p>
    <p>We currently have <?php echo count($cats); ?> cats in our database.</p>
    <p><?php if (file_exists($file)) : ?>
            The database was updated on <?php echo date("F d Y", filemtime($file)); ?>.
        <?php endif ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ab minus optio explicabo dolore, sequi porro alias veritatis animi molestias, eius quam fugit reiciendis inventore! Vero nemo vitae sed voluptatem officia labore mollitia corporis totam voluptas aut ut rerum assumenda quidem sapiente incidunt enim, illum accusamus. Aliquid, ipsum ullam eum ipsam fuga, assumenda eveniet sapiente maiores quos beatae adipisci dolore suscipit temporibus. Aliquid amet praesentium quidem atque ex voluptas ullam officia blanditiis ipsam aut expedita eveniet nesciunt dicta possimus maiores accusantium impedit harum, veniam nemo alias aperiam? Non doloremque hic saepe. Pariatur itaque dignissimos sapiente dolore veniam eaque aliquam, aliquid harum deleniti neque earum non maxime exercitationem vitae quas totam praesentium ipsam architecto debitis fuga! Molestias aut eos, quo ab temporibus, doloribus aperiam error a animi labore qui fugiat odit assumenda. Nostrum maiores illo dignissimos vitae perferendis provident officia aut? Id fuga, perspiciatis corporis provident nisi culpa minima laborum aliquam, voluptatem, totam sint amet quisquam alias modi similique reiciendis! Inventore id alias qui nemo. Consequuntur enim ducimus distinctio doloribus est cum culpa perferendis. Quasi quibusdam, officiis praesentium numquam esse architecto fugit pariatur soluta eaque minus ad reprehenderit maiores sint velit amet explicabo ab omnis dolores a voluptatibus libero ullam itaque!</p>

    <?php for ($i = 0; $i < count($cats); $i++) : ?>
        <img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="200px">
        <?php echo $cats[$i]['name'] ?>

    <?php endfor; ?>

</div>
<?php require_once('footer.php'); ?>
