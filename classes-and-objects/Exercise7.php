<?php

class Dog {
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;
    public function __construct(string $name, string $sex, ?string $mother, ?string $father) {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }
    public function getFather(): ?string
    {
        return $this->father;
    }

    public function getMother(): ?string
    {
        return $this->mother;
    }

    public function setFather(?string $father): void
    {
        $this->father = $father;
    }

    public function setMother(?string $mother): void
    {
        $this->mother = $mother;
    }
    public function fathersName(): string {
        return $this->father !== null ? $this->father :"undefined";
    }
    public function hasSameMotherAs($dog): bool {
        return $this->mother == $dog->getMother();
    }

}
class dogTest{
    public static function main(string $name, string $sex, ?string $mother, ?string $father): object {
        return new Dog($name, $sex, $mother, $father);
    }
}
$dogs = [
    dogTest::main("Max", "male", "Lady", "Rocky"),
    dogTest::main("Rocky", "male", "Molly", "Sam"),
    dogTest::main("Sparkly", "male", null, null ),
    dogTest::main("Buster", "male", "Lady", "Sparky"),
    dogTest::main("Sam", "male", null, null),
    dogTest::main("Lady", "female", null, null),
    dogTest::main("Molly", "female", null, null),
    dogTest::main("Coco", "female", "Molly", "Buster"),
];

foreach ($dogs as $dog) {
    echo $dog->fathersName() . "\n";
}
var_dump($dogs[0]->hasSameMotherAs($dogs[4]));