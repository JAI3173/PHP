<?php
class Car
{
    public $model="Sutiua janme";
    function showModel($a)
    {
        // echo $this->model;
        // $model="Desire";
        echo $this->model;
        // echo $this->a;
        echo "<br>A Values is ".$a;
    }
}
$obj=new car;
$obj->showModel(4);
?>