<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World!!</p>'; ?>
        <?php echo '<p>PHP is working</p>'; ?>
        
        <form action="index.php" method="post">
            <input type="text" name="num1" placeholder="Number 1">
            <input type="text" name="num2" placeholder="Number 2">
            <input type="submit">
        </form>
        Answer: <?php echo $_POST["num1"] + $_POST["num2"] ?>


    </body>
</html>