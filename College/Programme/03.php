<?php
class calculator
{
    public $a,$b,$c;
    function add()
    {
        $a=34;
        $b=40;
        echo $c=$a+$b;
    }
}
$obj=new calculator();
$obj->add();
?>