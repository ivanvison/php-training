<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Assignment Operator</title>
    </head>
    <body>
        <h1><?php echo 'Variables and Assignment Operator'; ?></h1>
        
        <!-- Variables Casing in PHP -->
        <?php
            $total_price = 15;
            echo "<p>Total price is $total_price</p>";

            // Camel Casing (Preferred)
            $thisIsCamelCasing = 1;

            //Pascal Casing
            $ThisIsPascalCasing = 2;

            //Snake Casing
            $this_is_snake_casing = 3;
        ?>

        <!-- Operators in PHP -->
        <?php
            $age = 38;
            echo "Age: $age <br>";
            $age += 1;
            echo "Updated Age: $age";
        ?>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>