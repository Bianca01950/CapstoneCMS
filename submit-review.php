<?php
 
 // get the data to insert into the db
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $date = $_POST["date"];
 $title = $_POST["title"];
 $content = $_POST["content"];

 // insert the data with the sql query
 include_once 'dbconnect.php';
 $sql="INSERT INTO review (fname, lname, date, title, content) VALUES ('" .     

 $fname . "','" .  $lname . "','" . $date . "','" . $title . "','" . $content ."')";
$result = mysqli_query($conn, $sql);

// redirect to homepage
header("Location: index.php");
?>