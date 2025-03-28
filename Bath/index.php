<?php
    $title_sect = 'Bath city';
    $css_sect = 'styles.css';
    require_once('inc/header.php');
?>
<body>
    <?php require_once('inc/navigation.php');?>
    <br>
    <section class="intro">
        <h2>Intoduction</h2>
        <br>
        <p>Bath is considered one of the oldest and most beautiful
        cities in Great Britain. Unlike most cities and the capital,
        Bath has preserved the ancient architectural style of Gothic.
        People from all over the world come to this city to walk along the beautiful streets,
        see the sights and simply enjoy the view of the city.
        </p>
    </section>
    <br>
    <nav>
        <ul class="navigation">
            <li>
                <a href="attractions.php">
                    <img src="images/roman-bath.jpg" alt="Attractions">
                    <div class="label">Attractions</div>
                </a>
            </li>
            <li>
                <a href="universities.php">
                    <img src="images/universities.jpeg" alt="Universities">
                    <div class="label">Universities</div>
                </a>
            </li>
            <li>
                <a href="extras.php">
                    <img src="images/sightseeings.jpg" alt="Extras">
                    <div class="label">Extras</div>
                </a>
            </li>
        </ul>
    </nav>

    <?php require_once('inc/footer.php');?>
</body>
</html>
