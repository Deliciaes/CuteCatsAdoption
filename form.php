<?php require_once('header.php'); ?>

<?php

if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {
    $name = sanitizeForm($_POST['name']);
    $email = sanitizeForm($_POST['email']);
    $phone = sanitizeForm($_POST['phone']);
    $message = sanitizeForm($_POST['message']);
}


?>

You can contact us by calling us or visiting us, or by filling in the form below:
<p>Contact form:</p>
<div class="form">

    <form action="form.php" method="post">


        <p><label for="name">Name</label></p>
        <p><input type="text" name="name" required></p>

        <p><label for="email">Email</label></p>
        <p><input type="email" name="email" required></p>

        <p><label for="phone">Phone number</label>
            <input type="text" name="phone">
        </p>

        <p><label for="message">Message</label></p>
        <p><textarea name="message" id="message" required></textarea></p>

        <p><button type="submit">Submit</button></p>
    </form>

    <?php if (isset($name, $email, $phone, $message)) : ?>
        Thank you for your message. We will get back to you. Information submitted:
        <p>Name: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone number: <?php echo $phone; ?></p>
        <p>Message: <?php echo $phone; ?></p>

    <?php endif ?>







</div>
<?php require_once('footer.php'); ?>
