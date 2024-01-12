<!DOCTYPE html>
<html>
    <head>
        <title>Adding Logic - LOOPS</title>
    </head>
    <body>
        <h1><?php echo 'LOOPS'; ?></h1>

        <!-- While Loops -->
        <p>
            <h2>While Loops</h2><br/>
            <?php 
                $a = 1;

                while ($a <= 5) {
                    echo $a . '<br>';
                    $a++;
                }

                /*
                do {
                    echo $a . '<br>';
                    $a++;
                } while ($a <= 5);
                */
                
            ?>
            <hr>
        </p>

        <!-- For Loops -->
        <p>
            <h2>For Loops</h2><br/>
            <?php 
                for ($i = 1; $i <= 5; $i++) {
                    if ($i === 3) {
                        continue;
                    }
                    echo 'Ivan es ' . $i . '<br>';
                }
            ?>
            <hr>
        </p>

        <!-- Foreach Loops -->
        <p>
            <h2>Foreach Loops</h2><br/>
            <?php 
                $names = ['Ivan', 'Vison', 'Ivan Vison'];

                foreach ($names as $key => $name) {
                    echo $key . ' - ' . $name . '<br>';
                }
            ?>
            <hr>
        </p>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>