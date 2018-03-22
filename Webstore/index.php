<!DOCTYPE html>

<?php include 'functions.php' ?>
<html>
    <head>
    </head>
    
    <h3>FAU Engineering Web Store</h3>
    <body>
        <form action="">
            FAU Username:
            <input type="text" name="userID">
            <br>
            Password:
            <input type="text" name="userPass">
            <br>
            <input type="submit" value="Login">
        </form>
        <br>
        <form action="search.php" method="post">
            Search:
            <input type="text" name="productName">
            <input type="submit" value="Search">
        </form>
    </body>
</html>