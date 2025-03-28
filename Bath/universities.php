<?php
    $title_sect = 'Bath universities';
    $css_sect = 'styles-universities.css';
    require_once('inc/header.php');
?>
<body>
    <?php require_once('inc/navigation.php');?>
    <br>
    <section class="intro">
        <br>
        <p>Universities in Bath attract students with their high standard of education,
        innovative approaches to teaching and beautiful architecture of campuses located
        in a picturesque city. Bath offers students excellent opportunities for personal
        and professional development, combining a rich cultural environment with modern
        educational resources. The city is famous for its historical heritage,
        cosy atmosphere and good conditions for students, which makes studying here
        attractive to young people from all over the world.</p>
    </section>
    <br>
    <nav>
        <ul class="navigation">
            <li>
                <a href="bath_uni.php">
                    <img src="images/university_of_bath.jpg" alt="bath">
                    <div class="label">University Of Bath</div>
                </a>
            </li>
            <li>
                <a href="bath_spa.php">
                    <img src="images/bath_spa.jpg" alt="bath_spa">
                    <div class="label">Bath Spa University</div>
                </a>
            </li>
        </ul>
    </nav>

    <?php require_once('inc/footer.php');?>
</body>
</html>
