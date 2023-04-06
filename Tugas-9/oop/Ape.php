<?php
class sungokong extends animal{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $yell;
  
    // Methods
    function __construct($name, $legs, $cold_blooded, $yell){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->yell = $yell;
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
    function get_yell() {
        return $this->yell;
  }
}
$ape = new sungokong("kera sakti", "2", " no", "Auooo");
echo "Name : " . $ape->get_name();
echo "<br>";
echo "legs : " . $ape->get_legs();
echo "<br>";
echo "Cold blooded :" . $ape->get_cold_blooded();
echo "<br>";
echo "Yell : " . $ape->get_yell();
