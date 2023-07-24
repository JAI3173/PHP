<?php
 class calculator{
    protected $a,$b,$c;
    function add()
    {
        $this->a=30;
        $this->b=50;
        $this->c=$this->a +$this->b;
        return $this->c;
    }
    function sub()
    {
        $this->a=200;
        $this->b=60;
        $this->c=$this->a +$this->b;
        return $this->c;
    }
 }
 class cals extends calculator{
    public $x;
    function mul()
    {
        echo "<br> A values is =".$this->a;
        echo "<br> B values is =".$this->b;
         echo  "<br> mul called=".$this->x=$this->a * $this->b;
        // $this->x=$this->a * $this->b;
        // return $this->x;
    }
 }
 $obj=new cals();
echo "your total is =".$obj->add();
echo "<br>your subtraiob is =".$obj->sub();
   $obj->mul();
 
?>