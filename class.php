<?php

abstract class MyObject {
    // Abstract method with no body
    abstract protected function getValue();

    // Concrete method
    public function printValue() {
        echo $this->getValue();
    }
}

class ConcreteObject extends MyObject {
    protected function getValue() {
        return "Hello, World!";
    }
}

$object = new ConcreteObject();
// $object2 = new MyObject(); // Fatal error: Uncaught Error: Cannot instantiate abstract class MyObject
$object->printValue(); // Outputs: Hello, World!

?>