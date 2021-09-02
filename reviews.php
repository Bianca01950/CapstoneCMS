<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
    <div id="main">
        <main>
        <div id="form">
                <h2>Leave a Review!</h2>
                <p class="subtext">Reviews are hot off the French presses</p><br><br>
                <div id="form">
                <form action="submit-review.php" method="POST">
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Last Name"><br><br>
                    <label for="date">Date</label><br>
                    <input type="date" id="date" name="date" placeholder="Date"></input><br><br>
                    <label for="title">Review Title</label><br>
                    <input type="text" id="title" name="title" placeholder="Brief Summary of Review"></input><br><br>
                    <label for="content">Review:</label><br>
                    <textarea id="content" placeholder="Do we mocha you happy?" name="content" rows="4" cols="50"></textarea> <br><br>
                    <input type="checkbox" name="status1" value="okay">
                    <label for="vehicle1"> This visit was not very cool beans. </label><br><br>
                    <input type="checkbox" name="status2" value="good">
                    <label for="vehicle2"> This visit was just beans. </label><br><br>
                    <input type="checkbox" name="status2" value="great" checked>
                    <label for="vehicle3"> This visit was cool beans!</label><br><br>
                    <button id="submit" type="submit" value="Submit">Submit</input>
                </form>
</div><!--close for form-->
                    <br><br><h3 class="thanks"> bottomless thanks! </h3>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>
