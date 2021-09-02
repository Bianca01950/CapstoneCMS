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
                <h3 class="reviewheader"><?php echo $postDetails["title"]; ?></h3>
                    <h4 class="reviewcontent"><?php echo $postDetails ["content"]; ?></h4><br>
                    <div id="reviewer">
                    <div><?php echo $postDetails ["fname"]; ?></div>
                    <div><?php echo $postDetails ["lname"]; ?></div>
            </div><!--close for reviewer-->
                    <div class="date"><?php echo $postDetails ["date"]; ?></div>
                </div>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>