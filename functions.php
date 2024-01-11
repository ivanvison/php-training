<?php 
    function getStatus ($paymentStatus, $showMessage) {

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