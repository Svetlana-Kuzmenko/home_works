<?php

class User{
    protected $name;
    protected $age;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
      public function getAge()
    {
        return $this->age;
    }

}
 class Worker extends User{
        private $salary;
     public function setSalary($salary)
     {
         $this->salary = $salary;
     }
     public function getSalary()
     {
         return $this->salary;
     }
}
class Student extends User{
    private $scholarship;
    private $course;
    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }
    public function getScholarship()
    {
        return $this->scholarship;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }
    public function getCourse()
    {
        return $this->course;
    }
}
class Driver extends Worker{
    private $driving_experience;
    private $driving_category_A;
    private $driving_category_B;
    private $driving_category_C;
    //private $driving_category=[A, B, C];
}

$worker1= new Worker();
$worker1->setName('Ivan');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2=new Worker();
$worker2->setName('Vasya');
$worker2->setAge(26);
$worker2->setSalary(2000);

$sumSalary=$worker1->getSalary()+$worker2->getSalary();

echo 'Worker1:'.$worker1->getName().','.$worker1->getAge().','.$worker1->getSalary()."\n";
echo 'Worker2:'.$worker2->getName().','.$worker2->getAge().','.$worker2->getSalary()."\n";
echo 'SumSalary:'.$sumSalary;
