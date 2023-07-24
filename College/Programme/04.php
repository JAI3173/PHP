<?php
class calculator
{
    public $a,$b,$c;
    function add()
    {
        $a=23;
        $b=45;
        echo "Addition is =".$c=$a+$b ."<br>";
    }
    function sub()
    {
        $a=45;
        $b=100;
        echo  "Your Subration is =".$c=$a-$b;
    }
}
$obj=new calculator();
$obj->add();
$obj->sub();
?>