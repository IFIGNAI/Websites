<?php
$title_sect = 'Bath extras';
$css_sect = 'styles-extras.css';
require_once('inc/header.php');
?>
<body>
    <?php require_once('inc/navigation.php'); ?>
    <br>
    <section class="intro">
        <h1>What do you think?</h1>
        <?php
        //estabilish connection with db created by adminer and i added protection as in EX09
        include('../../dbCon.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $from = htmlspecialchars($_POST['from']);
            $message = htmlspecialchars($_POST['message']);
            //preparation to submit
            $stmt = $mysqli->prepare("INSERT INTO comments (`from`, `message`, `date`) VALUES (?, ?, now())");
            $stmt->bind_param("ss", $from, $message);
            //additional comment if submittion succesfull
            if ($stmt->execute()) {
                echo "<p class='success'>Comment added!</p>";
            } else {
                echo "<p class='error'>Error: " . $mysqli->error . "</p>";
            }

            $stmt->close();
        }
        ?>
        <form method="POST" action="comments.php" class="comment-form">
            <label for="from">Name:</label>
            <input type="text" name="from" id="from" required>

            <label for="message">Comment:</label>
            <textarea name="message" id="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <!--button to show and hide comments-->
        <h2>
            <button id="toggle-comments" class="toggle-button">Show Comments</button>
        </h2>
        <div id="comments" class="comments hidden">
        <!--creating a request to every comment -->
            <?php
            $sql = "SELECT * FROM comments ORDER BY date DESC";
            $result = $mysqli->query($sql);
            //creating a special div block for every comment
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='comment'>";
                    echo "<p class='comment-author'>" . $row['from'] . "</p>";
                    echo "<p class='comment-message'>" . $row['message'] . "</p>";
                    echo "<p class='comment-date'>" . $row['date'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No comments, be first!</p>";
            }

            $mysqli->close();
            ?>
        </div>
    </section>
    <?php require_once('inc/footer.php'); ?>
    <script src="scripts/comments.js"></script>
</body>
</html>
