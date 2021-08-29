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
                <h2>Contact Us</h2>
                <form>
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="review">Review Title:</label>      <!-- need a bigger text box-->
                    <input type="text" id="review" name="review"><br><br>
                    <label for="review">Review Content:</label>
                    <input type="text" id="review" name="review"><br><br>

                </form>

                <form action="/reviews.php" method="get">
                    <p> <h3> Overall Visit: </h3> </p> 
                        <br>
                    <input type="checkbox" name="status1" value="okay">
                    <label for="vehicle1"> This visit was not good at all. </label><br>
                    <input type="checkbox" name="status2" value="good">
                    <label for="vehicle2"> This visist was alright. </label><br>
                    <input type="checkbox" name="status2" value="great" checked>
                    <label for="vehicle3"> This visist was great!</label><br><br>
                    <input type="submit" value="Submit">

                    <p> <h3> Thank you for your input! </h3> </p> 
</form>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>