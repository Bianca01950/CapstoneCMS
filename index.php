<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
            <div id="main">
                <main>
                    
                    <h2>Our Story</h2>
                    <p>Lorem ipsum Whatever brunch selfies pork belly. Kombucha snackwave tofu stumptown. Bespoke 3 wolf moon etsy, hashtag flannel tacos whatever. Marfa la croix pork belly jean shorts roof party pabst chicharrones tacos retro stumptown brunch XOXO selfies kickstarter. Mumblecore fixie fanny pack williamsburg +1 3 wolf moon drinking vinegar knausgaard selvage viral yuccie raw denim chartreuse cardigan. Synth master cleanse hexagon air plant, helvetica vape fashion axe kombucha shoreditch VHS. Iceland butcher DIY subway tile.</p>
                    <br>
                    <br>
                    <h3>Testimonials</h3>
                    <?php
                        function getPostTitlesFromDatabase() {
                            // Get all the post titles from the posts table
                            include_once 'dbconnect.php';
                            $sql = "SELECT title FROM reviews";
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
                </main>
            </div><!--close for main-->
        <?php include 'footer.php' ?>
    </body>
</html>