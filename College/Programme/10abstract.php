<?php
 abstract class parentclass
{
    abstract protected function cal($a,$b);
    
}
class child extends parentclass
{
      public function cal($a,$b)
      {
    echo "Seeta Ram";
    echo $a+$b;
      }
}
$obj=new child;
$obj->cal(23,3);


?>