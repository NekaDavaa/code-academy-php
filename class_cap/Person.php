<?php
class Person {
    private $name;
    private $age;
    private $email;

    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }
    public function changeName($newName) {
        $this->name = $newName;
    }

    public function changeAge($newAge) {
        $this->age = $newAge;
    }

    public function changeEmail($newEmail) {
        $this->email = $newEmail;
    }
}
$person_obj = new Person ("Antonio", 20, "admin@abv.bg");
