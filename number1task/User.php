<?php

class User
{
    protected string $name;
    protected int $age;

    public function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName ($name) {
        $this->name = $name;
    }

    public function getName (): string {
        return $this->name;
    }

    public function setAge ($age) {
        $this->age = $age;
    }

    public function getAge (): int {
        return $this->age;
    }
}

class Student extends User
{
    private int $studentSalary;
    private int $course;

    public function setStudentSalary ($studentSalary) {
        $this->studentSalary = $studentSalary;
    }

    public function getStudentSalary(): int {
        return $this->studentSalary;
    }

    public function setCourse ($course) {
        $this->course = $course;
    }

    public function getCourse () {
        return $this->course;
    }
}

class Worker extends User
{
    private int $salary;

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}

$worker_1 = new Worker('Иван', 25 );
$worker_1->setSalary(1000);

$worker_2 = new Worker ('Вася', 26);
$worker_2->setSalary(2000);

echo "Sum of the workers salaries: " . $worker_1->getSalary() + $worker_2->getSalary() . PHP_EOL;


$student_1 = new Student('Даниил', 20);
$student_1->setStudentSalary(5000);

$student_2 = new Student('Василий', 22);
$student_2->setStudentSalary(3000);

echo "Sum of the student salaries: " . $student_1->getStudentSalary() + $student_2->getStudentSalary() . PHP_EOL;


class Driver extends User
{
    private int $experience;
    private string $category;

    public function setExperience ($experience) {
        $this->experience = $experience;
    }

    public function getExperience (): int {
        return $this->experience;
    }

    public function setCategory ($category) {
        $this->category = $category;
    }

    public function getCategory (): string {
        return $this->category;
    }
}

$driver_1 = new Driver ('Vladimir', 40);
$driver_1->setExperience(10);

$driver_2 = new Driver ('Oleksii', 30);
$driver_2->setExperience(6);

echo "Sum of the drivers experiences: " . $driver_1->getExperience() + $driver_2->getExperience() . PHP_EOL;
