<?php
    $title_sect = 'Bath attractions';
    $css_sect = 'styles-attraction.css';
    require_once('inc/header.php');
?>
<body>
    <?php require_once('inc/navigation.php');?>
    <section class="intro">
        <br>
        <p>The city of Bath in the UK is famous for its rich history and cultural monuments that attract tourists</p>
        <p>from all over the world. It is known for its unique architectural styles,</p>
        <p>especially Georgian and medieval Gothic,</p>
        <p>as well as its ancient Roman buildings.</p>
    </section>
    <br>
    <nav>
        <ul class="navigation">
            <li>
                <a href="Roman_Bath.php">
                    <img src="images/roman-bath.jpg" alt="romman">
                    <div class="label">Roman Bath</div>
                </a>
            </li>
            <li>
                <a href="Royal.php">
                    <img src="images/Crescent.jpg" alt="crescent">
                    <div class="label">The Royal Crescent</div>
                </a>
            </li>
            <li>
                <a href="Holbrune.php">
                    <img src="images/Holbrune.jpg" alt="holbrun">
                    <div class="label">The Holburne Museum</div>
                </a>
            </li>
            <li>
                <a href="Victoria.php">
                    <img src="images/Victoria.jpg" alt="victoria">
                    <div class="label">Royal Victoria Park</div>
                </a>
            </li>
        </ul>
    </nav>

    <?php require_once('inc/footer.php');?>
</body>
</html>
