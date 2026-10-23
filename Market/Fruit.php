<?php
  class Fruit {
    /*Properties - store data, it is variables*/
    private $name;
    private $price;

    /*Methods - functions*/
    public function __construct($new_name, $new_price)
    {
      $this->name = $new_name;
      $this->price = $new_price;
    }

    public function __destruct()
    {
      echo"<br> Bye!";
    }

    public function showInfo(){
      echo "Name: {$this->name}<br>";
      echo "Price: {$this->price}";
    }

    /* Setters */
    // public function setName($new_name){
    //   $this->name = $new_name;
    // }
    // public function setPrice($new_price){
    //   $this->price = $new_price;
    // }


    /* Getters */
    public function getName(){
      return $this->name;
    }
    public function getPrice(){
      return $this->price;
    }
  }

  // $apple = new Fruit();
  // $apple->setName("Apple");
  // $apple->setPrice(3.25);
  // echo "Name: " . $apple->getName();
  // echo "<br> Price: " . $apple->getPrice();
?>