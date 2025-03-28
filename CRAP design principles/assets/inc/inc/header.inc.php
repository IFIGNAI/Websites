<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRAP Principles | <?php echo $pageTitle?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <script src="assets/javascript/scripts.js" defer></script>
    <script src="assets/javascript/tips.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => { darkMode(); });
    </script>
</head>
<body>
    <header>
        <section class="grid">
            <!-- LOGO -->
            <a href="index.php"><img id="headerLogo" src="assets/media/Logo.png" alt="Logo"></a>

            <nav>
                <a href="contrast.php">c</a>
                <a href="repetition.php">r</a>
                <a href="alignment.php">a</a>
                <a href="proximity.php">p</a>
            </nav>

            <div class="citeButton"><a href="citations.php">works cited</a></div>
        </section>
        
        <hr>

        <button class="button" id=dark_mode onclick="darkMode();">light/dark mode</button>
    </header>