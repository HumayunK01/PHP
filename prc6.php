<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <title>Practical 06</title>
</head>

<body>
    <?php
    //(Demo code for inheritance):
    class demo
    {
        public function display()
        {
            echo "Example Of Inheritance ";
        }
    }
    class demo1 extends demo
    {
        public function view()
        {
            echo "In PHP<br>";
        }
    }
    $obj = new demo1();
    $obj -> display();
    $obj -> view();

    //(Demo code for constructor):
    class MyClass
    {
        public $property1;
        public $property2;

        public function __construct($arg1, $arg2)
        {
            $this -> property1 = $arg1;
            $this -> property2 = $arg2;
        }
    }
    $obj = new MyClass('Humayun ', 'Khan<br>');
    echo $obj -> property1;
    echo $obj -> property2;

    // Protected Access Modifier code
    /* Parent Class (Also called superclass and base class) */
    class Phone
    {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this -> name = $name;
            $this -> color = $color;
        }

        protected function intro()
        {
            echo "The phone is {$this->name} and the color is {$this->color}.";
        }
    }
    /* Child class (Also called derived class,  extended class, and subclass) */
    class Apple extends Phone
    {
        function message()
        {
            echo "About Phone: ";
            $this -> intro();
        }
    }
    $obj = new Apple("Apple iPhone 14 Pro", "Green");
    $obj -> message();
    ?>
</body>

</html>