<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Assignment Operator</title>
    </head>
    <body>
        <h1><?php echo 'Data Types'; ?></h1>

        <p>
            <strong>Data Type > Null</strong>
            <?php
                // Null is a data type that has no value
                $null = null;
                echo $null;
                var_dump($null);
            ?>
        </p>

        <p>
            <strong>Data Type > Boolean</strong>
            <?php
                // boolean is a data type that has two values: true or false
                // variable should be performed as a question
                $isLoggedIn = true;
                echo $isLoggedIn;
                var_dump($isLoggedIn);
            ?>
        </p>

        <p>
            <strong>Data Type > Integer</strong>
            <?php
                // integer is a data type that has a whole number
                $age = 29;
                echo $age;
                var_dump($age);
            ?>
        </p>

        <p>
            <strong>Data Type > Float</strong>
            <?php
                // float is a data type that has a decimal number
                $height = 5.7;
                echo $height;
                var_dump($height);
            ?>
        </p>

        <p>
            <strong>Data Type > String</strong>
            <?php
                // string is a data type that has a text
                $name = 'Ivan Vison';
                echo $name;
                var_dump($name);
            ?>
        </p>

        <p>
            <strong>Data Type > Array</strong>
            <?php
                // array is a data type that has a collection of data
                $fruits = array('apple', 'banana', 'orange');
                echo $fruits[1];
                var_dump($fruits);
            ?>
        </p>
        
        <p>
            <strong>Data Type > Object</strong>
            <?php
                // object is a data type that has a collection of data
                // object is a collection of properties and methods
                class Person {
                    public $name;
                    public $age;
                    public $height;

                    public function __construct($name, $age, $height) {
                        $this->name = $name;
                        $this->age = $age;
                        $this->height = $height;
                    }

                    public function greet() {
                        return 'Hello, my name is ' . $this->name . '!';
                    }
                }

                $person = new Person('Ivan Vison', 29, 5.7);
                echo $person->name;
                echo $person->age;
                echo $person->height;
                echo $person->greet();
                var_dump($person);
            ?>
        </p>

        <p>
            <strong>Data Type > Resource</strong>
            <?php
                // resource is a data type that has a collection of data
                // resource is a reference to the external resource
                $file = fopen('data_types.php', 'r');
                echo $file;
                var_dump($file);
            ?>
        </p>

        <p>
            <strong>Data Type > Callable</strong>
            <?php
                // callable is a data type that has a collection of data
                // callable is a function that can be called
                function sayHello() {
                    echo 'Hello!';
                }

                $sayHello = 'sayHello';
                $sayHello();
                var_dump($sayHello);
            ?>
        </p>
        
       <?php
            // Var dump is used to display the data type of a variable
            var_dump(29);
        ?>

        <hr>
        <center><p>Ivan Vison</p></center>
    </body>
</html>