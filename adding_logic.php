<!DOCTYPE html>
<html>
    <head>
        <title>Adding Logic</title>
    </head>
    <body>
        <h1><?php echo 'Control Structure'; ?></h1>

        <!-- IF Statement -->
        <p>
            <h2>IF Statement</h2><br/>
            <?php 
                $score = 40;

                if ($score > 90) {
                    echo 'A';
                } else if ($score > 80) { 
                    echo 'B';
                } else if ($score > 70) {
                    echo 'C';
                } else {
                    echo 'F';
                }
            ?>
            <hr>
        </p>


        <!-- Switch -->
        <p>
            <h2>Switch Statement</h2><br/>
            <?php 
                $paymentStatus = 1;

                switch($paymentStatus) {
                    case 1:
                        echo 'Success';
                        break;
                    case 2:
                        echo 'Pending';
                        break;
                    case 3:
                        echo 'Failed';
                        break;
                    default:
                        echo 'Unknown';
                }
            ?>
            <hr>
        </p>


        <!-- Match Expressions -->
        <p>
            <h2>Match Expressions</h2><br/>
            <?php 
            // Match expressions are similar to switch statements.
            // The difference is that match expressions return a value.
            // Introduced in PHP 8.0
                $paymentStatus = 1;

                $result = match($paymentStatus) {
                    1 => 'Success',
                    2 => 'Pending',
                    3 => 'Failed',
                    default => 'Unknown'
                };

                echo $result;

            ?>
            <hr>
        </p>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>