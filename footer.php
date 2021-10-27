</div>
</div>
<footer>

    <ul>
        <h3><?php echo $company['name'] ?></h3>
        <li>
            <h4>Address:</h4> <?php echo $company['address'] ?>
        </li>
        <li>
            <h4>Email:</h4> <a href="mailto:<?php echo $company['email']; ?>"><?php echo $company['email']; ?></a>
        </li>
        <li>
            <h4>Phone number:</h4> <a href="tel:<?php echo $company['phone']; ?>"><?php echo $company['phone'] ?></a>
        </li>
        <li>
            <h4>Opening Hours:</h4> <?php echo $company['openingHours'] ?>
        </li>
    </ul>
    <img src="photos/logo.png">
</footer>
</body>

</html>
