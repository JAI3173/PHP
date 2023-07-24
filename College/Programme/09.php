<?php
class Car
{
    public $maruti=array("Desire","Shift","Alto","Zx");
    function jp()
    {
        echo $this->maruti[0];
        // echo "Kirti Tak";
    }
}
$obj=new Car;
$obj->jp();

?>