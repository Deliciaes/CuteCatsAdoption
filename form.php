<?php require_once('header.php'); ?>

<?php

if (isset($_GET['name'], $_GET['email'], $_GET['phone'], $_GET['message'])) : ?>
    Thank you for your message. We will get back to you. Information submitted:
    <p>Name: <?php echo $_GET['name']; ?></p>
    <p>Email: <?php echo $_GET['email']; ?></p>
    <p>Phone number: <?php echo $_GET['phone']; ?></p>
    <p>Message: <?php echo $_GET['message']; ?></p>

<?php endif ?>

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae iure consequuntur earum temporibus corrupti error. Alias amet placeat reprehenderit non, necessitatibus voluptate sapiente a aliquid! Quo praesentium magni laboriosam obcaecati culpa deserunt! Placeat quia nihil quibusdam minus sequi possimus, illum dolorem, repellat quis inventore mollitia quae, optio pariatur molestiae consequatur laboriosam cum? Tempore, delectus maxime velit reiciendis, dolorum quam exercitationem tenetur aut, similique excepturi inventore expedita? Esse nostrum, pariatur inventore incidunt recusandae obcaecati repellat voluptatem eum, magnam, sint dolorem consequuntur nisi! Dolore unde distinctio aliquid assumenda dolorem culpa magni voluptatem, dicta deleniti veritatis veniam voluptatum at perferendis. Incidunt, necessitatibus eaque quo impedit, unde ab vitae exercitationem dignissimos sint ad facilis asperiores tempore odio, assumenda quia sapiente dolor nesciunt ex soluta quod quam molestiae vel nemo? Sequi aliquam quo voluptatibus dicta temporibus assumenda similique culpa corporis laboriosam, deserunt tenetur dolor voluptatum accusantium amet iusto autem quam, nulla saepe odit voluptate inventore rem pariatur sit quae. Nesciunt esse asperiores eum facere. Magni aliquid veniam soluta id, dolores cum dolorum laboriosam perspiciatis vero blanditiis sequi rerum quibusdam libero commodi quisquam. Et aliquid eos sunt iste earum molestiae! Mollitia, quos aliquam temporibus voluptatibus nisi rem omnis nihil incidunt eos consequuntur nostrum provident debitis voluptatem.

<div class="contents">
    <p>Contact form:</p>
    <div>

        <form action="form.php" method="post">

            <div>
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="phone">Phone number</label>
                <input type="text" name="phone">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <button type="submit">Add comment</button>
        </form>





        </form>
    </div>



</div>
<?php require_once('footer.php'); ?>
