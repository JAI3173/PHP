<?php
 class calculator
 {
    public $a,$b,$c;
    function add()
    {
        $this->a=23;
        $this->b=40;
        $this->c=$this->a +$this->b;
        // echo "your total is ".$this->c;
        return $this->c;
    }
    function sub()
    {
        $this->a=60;
        $this->b=30;
        $this->c=$this->a -$this->b;
        return $this->c;
    }
 }
 $obj=new calculator();
  echo "your Total is= ".$obj->add();
  echo "<br>your Subration  is= ".$obj->sub();
?>