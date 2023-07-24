<?php
class One
{
    // private $x=45;
    //  public $x=45;
     protected $x=45;
    
    function add($a,$b=100)
    {
        $c=$a+$b;
        return $c;
    }
}
class Two extends One
{
    //    public  $a=4;
    //    public  $b=5;
    function sub()
    {
        echo "<br>X Values is=".$this->x;
        // echo "subtration is= ".$this->c=$this->a-$this->b;
    }
}
$obj=new Two;
echo $obj->add(45,2);
$obj->sub();
?>