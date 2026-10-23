<?php
  class employee{
    private $name;
    private $civ_status;
    private $position;
    private $emp_status;
    private $regular_hours;
    private $overtime;

    public function __construct($new_name, $new_civ_status, $new_position, $new_emp_status, $new_regular_hours, $new_overtime){
      $this->name             = $new_name;
      $this->civ_status       = $new_civ_status;
      $this->position         = $new_position;
      $this->emp_status       = $new_emp_status;
      $this->regular_hours    = $new_regular_hours;
      $this->overtime         = $new_overtime;
    }

    public function getName(){
      return $this->name;
    }

    public function getStatus(){
      return $this->civ_status;
    }

    public function getPosition(){
      return $this->position;
    }

    public function getEmpStatus(){
      return $this->emp_status;
    }

    // Define gross income rate based on emp status and position
    public function getGrossIncomerate(){
      if($this->emp_status == "contractual"){
        if($this->position == "admin"){
          return 350;
        } elseif($this->position = "staff"){
          return 300;
        }
      }
      
      if($this->emp_status == "probationary"){
        if($this->position == "admin"){
          return 400;
        } elseif($this->position = "staff"){
          return 350;
        }
      }

      if($this->emp_status == "regular"){
        if($this->positon == "admin"){
          return 500;
        }elseif($this->position == "staff"){
          return 400;
        }
      }
    } 

    // Define OT rate based on status
    public function getOTrate(){
      if($this->emp_status == "contractual"){
        if($this->position == "admin"){
          return 15;
        } elseif($this->position = "staff"){
          return 10;
        }
      }
      
      if($this->emp_status == "probationary"){
        if($this->position == "admin"){
          return 30;
        } elseif($this->position = "staff"){
          return 25;
        }
      }

      if($this->emp_status == "regular"){
        if($this->positon == "admin"){
          return 40;
        }elseif($this->position == "staff"){
          return 30;
        }
      }
    }

    // Gross income
    public function getGrossIncome(){
      return ($this->regular_hours * $this->getGrossIncomerate()) + ($this->overtime * $this->getOTrate()); 
    }

    // Deduction
    public function getDeduction(){
      $gross_income = $this->getGrossIncome();

      if($this->civ_status == "single"){
        if($gross_income > 1000){
          return ($gross_income * 0.05) + 200;
        } elseif($gross_income <= 1000){
          return $gross_income + 200;
        }
      }

      if($this->civ_status == "married"){
        if($gross_income > 1500){
          return ($gross_income * 0.03) + 75;
        } elseif($gross_income <= 1500){
          return $gross_income + 75;
        }
      }
    }
  }
?>