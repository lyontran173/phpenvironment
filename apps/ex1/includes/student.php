<?php

class Student
{
  public $firstName;
  public $lastName;
  public function __construct($fName, $lName)
  {
    $this->firstName = $fName;
    $this->lastName = $lName;
  }
  public function getFullName()
  {
    return $this->firstName . " " . $this->lastName;
  }
}
