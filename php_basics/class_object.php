
<?php
/* a class is a template which contains all the structure
and object is an instance which contains all the functionality of class
we can access classes elememt using object*/
 /*class fruit{
    public $name;
    public $fruit;
    function set_name($name){
        $this->name = $name;
        return $this->name;#$this->name here name is refering to the public $name and $name is the parameter 
    }
   function get_name(){
        
       #The $this keyword refers to the current object, and is only available inside methods.
    }

}
$apple = new fruit();
#$apple->set_name("banana");#here it is setting the name 
echo $apple->set_name("mango");#here we are calling set_name function from class */
class Sum{
    public $a;
    public $b;
    function add($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
        $add = $a + $b;
        return $add;
    }
    function sub($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
        $sub = $a - $b;
        return $sub;
    }
    }

$addition = new sum();
#$addition ->set_name(20,30);
echo "the addition of two numbers is " . $addition->add(7, 20);# + $addition->sub(80,20);

?>