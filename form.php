<?php require_once('header.php'); ?>


<?php
$contacts = [
    ['name' => '', 'email' => '', 'phone' => '', 'message' => ''],
];
// TODO: Implement the comments logic here.


if (isset($_GET['name'], $_GET['email'])) {
    echo $_GET['name'];
}

?>

<div class="contents">
    <p>For any queries, please use the form below. We will get back to you as soon as we can.</p>
    <div>
        <form>

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
