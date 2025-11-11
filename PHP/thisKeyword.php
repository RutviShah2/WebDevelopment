<?php
class Person
{
    public $name;
    function setName($n)
    {
        $this->name = $n;
    }
    function getName()
    {
        return $this->name;
    }
}
$p1 = new Person();
$p1->setName("Rutvi");
echo $p1->getName();
?>
