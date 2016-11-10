<!DOCTYPE html>
<html>
<head>
    <title>MyBookings</title>

</head>
<body>
    <h1>My Restaurant</h1>
    
    <h2>Book a Table</h2>
    <!--this is the booking form-->
    <form method="POST" action="book.php">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <lable>Date</lable>
        <input type="date" name="datebox">
        <lable>Time</lable>
        <input type="time" name="timebox">
        <input type="hidden" value="book" name="book">
        <!--this allows us to check which type of form was used-->
        <input type="hidden" value="book" name="book"> 
        <input type="submit" value="book">
        
        
    </form>
    
    
    
    <h2>Search for a booking</h2>
    <!--this searches for a booking-->
    
</body>
</html>


<?php

?>