<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Assignment Operator</title>
    </head>
    <body>
        <h1><?php echo 'Data Types'; ?></h1>

        <p>
            <strong>Data Type > Null</strong><br/>
            <?php
                // Null is a data type that has no value
                $null = null;
                echo $null;
                echo '<br>';
                var_dump($null);
            ?>
        </p>

        <p>
            <strong>Data Type > Boolean</strong><br/>
            <?php
                // boolean is a data type that has two values: true or false
                // variable should be performed as a question
                $isLoggedIn = true;
                echo $isLoggedIn;
                echo '<br>';
                var_dump($isLoggedIn);
            ?>
        </p>

        <p>
            <strong>Data Type > Integer</strong><br/>
            <?php
                // integer is a data type that has a whole number
                $age = 29;
                echo $age;
                echo '<br>';
                var_dump($age);
            ?>
        </p>

        <p>
            <strong>Data Type > Float</strong><br/>
            <?php
                // float is a data type that has a decimal number
                $height = 5.7;
                echo $height;
                echo '<br>';
                var_dump($height);
            ?>
        </p>

        <p>
            <strong>Data Type > String</strong><br/>
            <?php
                // string is a data type that has a text
                $name = 'Ivan Vison';
                echo $name;
                var_dump($name);

                //String interpolation
                echo '<br>';
                echo "Hello, my name is $name!";
                echo '<br>';
                echo "Hello, my name is {$name}!";

                //String concatenation
                echo 'Hello, my name is ' . $name . '!';
                echo '<br>';

                //Accessing string characters
                echo $name[0];
            ?>
        </p>

        <p>
            <strong>Data Type > Array</strong><br/>
            <?php
                // array is a data type that has a collection of data
                $fruits = array('apple', 'banana', 'orange');
                echo $fruits[1];
                echo '<br>';
                var_dump($fruits);
               
                echo '<br>';
                $colors = ['Red', 'Green', 'Blue'];

                //Adding an item to an array
                $colors[] = 'Yellow';
                var_dump($colors);
                echo '<br>';

                //Associative array (key-value pair) or Indexes - Names for keys instead of numbers
                $data = ['name' => 'Smith ABC', 'age' => 29, 'height' => 5.7];
                $data['weight'] = 150;
                var_dump($data);
                echo '<br>';

                //Multi-dimensional array
                $assets = [
                    'ivan' => ['Apartment', 'House', 'Car'],
                    'betty' => ['Apartment', 'Car'],
                    'john' => ['House', 'Car']
                ];
                var_dump($assets['ivan'][1]);
                echo '<br>';
                var_dump($assets);

            ?>
        </p>
        
        <p>
            <strong>Data Type > Object</strong><br/>
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
                echo '<br>';
                echo $person->age;
                echo '<br>';
                echo $person->height;
                echo '<br>';
                echo $person->greet();
                echo '<br>';
                var_dump($person);
            ?>
        </p>

        <p>
            <strong>Data Type > Resource</strong><br/>
            <?php
                // resource is a data type that has a collection of data
                // resource is a reference to the external resource
                $file = fopen('data_types.php', 'r');
                echo $file;
                echo '<br>';
                var_dump($file);
            ?>
        </p>

        <p>
            <strong>Data Type > Callable</strong><br/>
            <?php
                // callable is a data type that has a collection of data
                // callable is a function that can be called
                function sayHello() {
                    echo 'Hello!';
                    echo '<br>';
                }

                $sayHello = 'sayHello';
                echo '<br>';
                $sayHello();
                echo '<br>';
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