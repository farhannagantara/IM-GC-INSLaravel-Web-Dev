<?php
class Kodok extends animal{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $jump;
  
    // Methods
    function __construct($name, $legs, $cold_blooded, $jump){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->jump = $jump;
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
    function get_jump() {
        return $this->jump;
  }
}
$kodok = new kodok("buduk", "4", " no", "Hop Hop");
echo "Name : " . $kodok->get_name();
echo "<br>legs : " . $kodok->get_legs();
echo "<br>Cold blooded :" . $kodok->get_cold_blooded();
echo "<br>Jump : " . $kodok->get_jump();
