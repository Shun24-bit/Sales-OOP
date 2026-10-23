<?php
 class school_unit{
  private $name;
  private $year;
  private $unit;
  private $lab;

  public function __construct($new_name, $new_year, $new_unit, $new_lab){
    $this->name     = $new_name;
    $this->year = $new_year;
    $this->unit     = $new_unit;
    $this->lab     = $new_lab;
  }

  public function getName(){
    return $this->name;
  }

  public function getYear(){
    if($this->year == "year_1"){
      return 1;
  } elseif ($this->year == "year_2"){
      return 2;
  } elseif ($this->year == "year_3"){
      return 3;
  } elseif ($this->year == "year_4"){
      return 4;
  }
 }

  public function getUnit(){
    return $this->unit;
  }

  public function getLab(){
    return $this->lab;
  }

  // Check the total price
  public function totalPrice(){
    
    if($this->lab == "without_lab"){
      if($this->year == "year_1"){
        $price = 550 * $this->unit;
      } elseif($this->year == "year_2"){
        $price = 630 * $this->unit;
      } elseif($this->year == "year_3"){
        $price = 470 * $this->unit;
      } elseif($this->year == "year_4"){
        $price = 501 * $this->unit;
      }
    }

    if($this->lab = "with_lab"){
      if($this->year == "year_1"){
        $price = 3359 + ($this->unit * 550);
      } elseif($this->year == "year_2"){
        $price = 4000 + ($this->unit * 630);
      } elseif($this->year == "year_3"){
        $price = 2890 + ($this->unit * 470);
      } elseif($this->year == "year_4"){
        $price = 3555 + ($this->unit * 501);
      }
    }
    return $price;
  }
 }
?>