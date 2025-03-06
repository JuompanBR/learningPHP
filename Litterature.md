# PHP OOP Concepts progression

### Constructors and destructors
    A constructor is called when ever an object is created from a class. 

``` PHP
class Person() {

    private $name;
    private $age;

    function __constructor($name, $age) {

        $this->name = $name;
        $this->age = $age;
    }

    function __destructor() {

        echo 'This object is being deleted...';
        return;
    }

    public function getName() {

        return $this->name;
    }

    public function getAge() { 

        return $this->$age;
    } 


}
```
### Pascal Case and Camel case notations
Variables and methods use the Camel case notation while Classes and Pakcages use the pascal case notation.
Class constants should be written in all uppercase and underscores notations.