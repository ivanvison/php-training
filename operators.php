<!DOCTYPE html>
<html>
    <head>
        <title>Operators</title>
    </head>
    <body>
        <h1><?php echo 'Artihmetic Operators'; ?></h1>
        
        <?php 
            $data = 1 + 2 - 3 * 4 / 5;
            var_dump($data);
            echo '<br>';

            // PHP Struggles with decimal values

            // Modular Operator
            $data = 10 % 3;
            var_dump($data);
            echo '<br>';

            // Exponential Operator
            $data = 2 ** 3;
            var_dump($data);
            echo '<br>';
        ?>

        <hr>

        <h1><?php echo 'Assignment Operators'; ?></h1>
        
        <?php 
            $data = 10;
            $data = $data + 4; // $data += 4;
            var_dump($data);
            echo '<br>';
        ?>

        <hr>

        <h1><?php echo 'Comparison Operators'; ?></h1>
        
        <?php 
            var_dump(1 == 1);
            echo '<br>';
            var_dump(1 != '1');
            echo '<br>';
            var_dump(1 === '1');
            echo '<br>';
            
            // <, >, <=, >=

            // Spaceship Operator
            var_dump(1 <=> 1); // 0
            echo '<br>';
        ?>

        <hr>

        <h1><?php echo 'Error Control Operator'; ?></h1>
        
        <?php 
            // @ is used to suppress error messages
            @var_dump( (string) [1]);
        ?>

        <hr>

        <h1><?php echo 'Logical Operators'; ?></h1>
        
        <?php 
            $age = 29;
            $data = $age > 18 && $age < 65;
            @var_dump($data);
            echo '<br>';

            $permission = "admin";
            $data = $permission == "admin" || $permission == "moderator";
            @var_dump($data);
            echo '<br>';
        ?>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>