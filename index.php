<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
            <div id="main">
                <main>
                    <div id="banner">
                    <img src="images/bannerimage.jpg">
</div><!--close for banner-->
                    <h2>Our Story</h2>
                    <div id="about">
                    <p>Deja Brew Cafe was established in August of 2021 by a group of college students taking an Advanced Web Projects class. We're a bunch of user experience designers with a passion for puns and caffeine.</p>
                    <p> The company was built from scratch with a latte love, and we're known for our delicious baked goods and unique coffee flavors. We have one saying here at Deja Brew:</p>
</div><!--close for about-->
                    <p class="saying">don't feel depresso, have an espresso</p>
                    <br>
                    <br>
                    <h3>Reviews</h3>
                    <div id="reviews">
                    <?php
                        function getPostTitlesFromDatabase() {
                            // Get all the post titles from the posts table
                            include_once 'dbconnect.php';
                            $sql = "SELECT title FROM review";
                            $result = mysqli_query($conn, $sql);

                            // Get each result row as an assoc array, then add title to $postTitles
                            $postTitles = array();
                            while($row = mysqli_fetch_assoc($result)){
                                array_push($postTitles, $row['title']);
                            }
                            return $postTitles;
                        }
                        ?>
                        <ul>
                        <?php 
                                $postTitles = getPostTitlesFromDatabase();

                                foreach($postTitles as $postTitle) {
                                    echo "<li><a href='post.php?title=" . $postTitle
                                    . " ' class='title'>" . $postTitle . "</a></li>";
                                }
                            ?>
                        </ul>
                            </div><!--close for reviews-->
                </main>
            </div><!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>