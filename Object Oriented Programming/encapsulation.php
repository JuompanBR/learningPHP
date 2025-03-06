<?php
/* Encapsulation is a concept that binds together data and the methods that manipulate this data into one unit.*/

declare(strict_types=1);

class Person {

    private string $name;
    private string $address;
    private int $age;

    public function __construct(string $name, string $address, int $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setMessage($age) {
        $this->age = $age;
    }

    public function greet() {

        return "Hello, my name is {$this->name} and I am {$this->age} years old. I live at {$this->address}.";
    }
}
