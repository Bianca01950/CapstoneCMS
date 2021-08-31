<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <br>
            <br>
            <br>
            <?php
                function getPostDetailsFromDatabase() {
                    // Get the post title
                    $postTitle = rawurldecode($_GET["title"]);

                    // Get the post that matches the postTitle
                    include_once 'dbconnect.php';
                    $sql = "SELECT * FROM review WHERE title='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);

                    // Get the first row from the result as an associative array
                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
            ?>
            <?php
                // Post details contain all the data to generate the blog from

                $postDetails = getPostDetailsFromDatabase();
                ?>
                <h3><?php echo $postDetails["title"]; ?></h3>
                <div id="reviews">
                    <div><?php echo $postDetails ["fname"]; ?></div>
                    <div><?php echo $postDetails ["lname"]; ?></div>
                    <div><?php echo $postDetails ["date"]; ?></div>
                    <br>
                    <h4><?php echo $postDetails ["content"]; ?></h4>
                </div>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>