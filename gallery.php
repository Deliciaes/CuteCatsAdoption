<?php require_once('header.php'); ?>

<h1>Meet our cats!</h1>
<article>We currently have <?php echo count($cats); ?> cats available for adoption.</article>

<h5><?php echo getCatsLastUpdated($file) ?></h5>



<form action="gallery.php" method="GET">

    <select name="sort">
        <option disabled selected value>Sort by:</option>
        <option value="name" name="Name">Name</option>
        <option value="age" name="Age">Age</option>
        <option value="eye color" name="Eye color">Eye color</option>
        <option value="fur color" name="Fur color">Fur color</option>

    </select>
    <button type="submit">Sort</button>
</form>

<div class="galleryparent">
    <p><?php
        if (isset($_GET['sort'])) {
            $sortCats = array();
            foreach ($cats as $cat) {
                foreach ($cat as $key => $value) {
                    if (!isset($sortCats[$key])) {
                        $sortCats[$key] = array();
                    }
                    $sortCats[$key][] = $value;
                }
            }
            $orderBy = $_GET['sort'];
            array_multisort($sortCats[$orderBy], SORT_ASC, $cats);
            echo "Sorting by: $orderBy";
        } ?></p>
    <div class="gallery"><?php
                            for ($i = 0; $i < count($cats); $i++) : ?>
            <div><img src="<?php echo $cats[$i]['photo']; ?>" alt="<?php echo $cats[$i]['name'] ?> the cat" width="300px">
                <p><?php echo $cats[$i]['name'] ?>, <?php echo $cats[$i]['age'] ?> years old. <?php echo ucwords($cats[$i]['eye color']); ?> eyes and <?php echo $cats[$i]['fur color']; ?> fur.</p>
            </div>

        <?php endfor; ?>
    </div>

    <!--    <form action="form.php" method="post">


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




$sortByName = ($_GET['sort'] == 'name');
$sortByAge = ($_GET['sort'] == 'age');
$jpegSelected = ($_GET['type'] == 'jpg') ? 'selected' : '';
$gifSelected = ($_GET['type'] == 'gif') ? 'selected' : '';
?>
<form method="get">
    <select name="sort">
        <option>--</option>
        <option <?PHP echo $sortByName ?> value="name">Name</option>
        <option <?PHP echo $sortByAge ?> value="age">Age</option>
    </select>
    <button type="submit">Go</button>
</form>

    <?php require_once('footer.php');
