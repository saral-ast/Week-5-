<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
    private $type,$taste;
    const MESSAGE  = "Hello Strwberry";
    
    function __construct($name, $color,$type,$taste) {
        $this->type = $type;
        $this->taste = $taste;
        parent::__construct($name, $color);

    }
  public function message() {
    echo "Am I a fruit or a berry? and the type is {$this->type} and the taste is {$this->taste}."; 
    echo self::MESSAGE;
    $this -> intro();
  }
  
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red","Sour","Sweet");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected
?>
 
</body>
</html>
