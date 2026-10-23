<?php
  class Fare {
    // Properties
    private $age;
    private $distance;

    // Methods
    public function __construct($new_age, $new_distance)
    {
      $this->age      = $new_age;
      $this->distance = $new_distance;
    }

    public function getAge()
    {
      return $this->age;
    }
    public function getDistance(){
      return $this->distance;
    }


    // Compute fare
    public function computeFare(){
      IF($this->distance <= 4){
        $fare = 8;
      } else {
        $fare = 8 + ($this->distance - 4);
      }

      if($this->age >= 60){
        $fare = (8 + ($this->distance - 4))* 0.80;
      }
      return $fare;
    }
  }
?>