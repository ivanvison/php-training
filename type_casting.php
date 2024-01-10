<!DOCTYPE html>
<html>
    <head>
        <title>Type Casting</title>
    </head>
    <body>
        <h1><?php echo 'Type Casting'; ?></h1>
        
        <?php 
            // Type Casting is the process of converting a value from one data type to another
            /*
                (bool) $someVariable; //converts to boolean
                (int) $someVariable; //converts to integer
                (float) $someVariable; //converts to float
                (string) $someVariable; //converts to string
                (array) $someVariable; //converts to array
            */

            // Booleans 
            var_dump((bool) "");             // -> false
            var_dump((bool) "Some Text");    // -> true
            var_dump((boolean) "0");         // -> false
            var_dump((bool) "false");        // -> true
            var_dump((bool) 0);              // -> false
            var_dump((bool) 1);              // -> true
            var_dump((bool) -1);             // -> true
            var_dump((bool) null);           // -> false
            var_dump((bool) []);             // -> false
            var_dump((bool) ["hello"]);      // -> true

            // Integers
            // var_dump((int) false);        // -> 0
            // var_dump((integer) true);     // -> 1
            // var_dump((int) "-1");         // -> -1
            // var_dump((int) "Hello");      // -> 0
            // var_dump((int) "12 months");  // -> 12
            // var_dump((int) 12.7);         // -> 12
            // var_dump((int) null);         // -> 0

            // Float
            // var_dump((float) false);      // -> 0
            // var_dump((float) true);       // -> 1
            // var_dump((float) "-1");       // -> -1
            // var_dump((float) "Hello");    // -> 0
            // var_dump((float) "2.5 Hour"); // -> 2.5
            // var_dump((float) null);       // -> 0

            // Strings
            // var_dump((string) false);     // -> ""
            // var_dump((string) true);      // -> "1"
            // var_dump((string) 0);         // -> "0"
            // var_dump((string) 1.353);     // -> "1.353"
            // var_dump((string) []);        // -> "Array"
            // var_dump((string) ["John"]);  // -> "Array"
            // var_dump((string) null);      // -> ""

            // Arrays
            // var_dump((array) false);      // -> [false]
            // var_dump((array) true);       // -> [true]
            // var_dump((array) 0);          // -> [0]
            // var_dump((array) 1.353);      // -> [1.353]
            // var_dump((array) "John");     // -> ["John"]
            // var_dump((array) null);       // -> []
        ?>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>