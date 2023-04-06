<?php
class animal{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
  
    // Methods
    function __construct($name, $legs, $cold_blooded){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    function get_name() {
      return $this->name;
    }
    function get_legs() {
      return $this->legs;
    }
    function get_cold_blooded() {
        return $this->cold_blooded;
    }
    
}
$sheep = new animal("shaun", "4", " no");
echo "Name : " . $sheep->get_name();
echo "<br>legs : " . $sheep->get_legs();
echo "<br>Cold blooded :" . $sheep->get_cold_blooded();

