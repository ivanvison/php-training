<?php 
    // Default values can be set in the parameters, $ShowMessage = true
    // Type hinting can be used to specify the data type of the parameter, int $paymentStatus
    // mixed can be used to specify multiple data types, mixed $paymentStatus
    // strict_types can be used to specify the data type of the parameter, strict_types=1 ===> declare(strict_types=1)
    function getStatus (int|float $paymentStatus, bool $showMessage) {

        $result = match($paymentStatus) {
            1 => 'Success',
            2 => 'Pending',
            3 => 'Failed',
            default => 'Unknown'
        };

        if ($showMessage) {
            echo $result;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Adding Logic - Functions</title>
    </head>
    <body>
        <h1><?php echo 'Control Structure - Functions'; ?></h1>

        <!-- Match Expressions -->
        <p>
            <h2>Match Expressions w/ Function</h2><br/>
            <?php 
                $response = 2;
                
                if ($response != 1) {
                    getStatus($response, true);
                } else {
                    getStatus($response, false);
                }
            ?>
            <hr>
        </p>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>