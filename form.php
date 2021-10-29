<?php

require_once('header.php'); ?>

<?php

if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {
    sanitizeForm($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
}


?>

<h1>Contact us</h1>
<p>You can contact us by calling or visiting, or by filling in the form below:</p>
<div class="form">

    <form action="form.php" method="post">


        <p><label for="name">Name</label>
            <input type="text" name="name" required>
        </p>

        <p><label for="email">Email</label>
            <input type="email" name="email" required>
        </p>

        <p><label for="phone">Phone number</label>
            <input type="text" name="phone">
        </p>

        <p><label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>
        </p>

        <p><button type="submit">Submit</button></p>
    </form>
    <div class="blueparent">
        <?php if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) : ?>
            <div class="blue">
                <h2>Thank you for your message. We will get back to you. Information submitted:</h2>
                <p>
                <h4>Name:</h4> <?php echo $_POST['name']; ?></p>
                <p>
                <h4>Email:</h4> <?php echo $_POST['email'] ?></p>
                <p>
                <h4>Phone number:</h4> <?php echo $_POST['phone']; ?></p>
                <p>
                <h4>Message:</h4> <?php echo $_POST['message']; ?></p>
            </div>

        <?php endif ?>
    </div>

</div>
<?php require_once('footer.php');
