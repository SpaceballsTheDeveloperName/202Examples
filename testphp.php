#!/usr/bin/php
<?php

echo "begin script".$argv[0].PHP_EOL;

class Student
{
  private $name;
  private $address;
  private $gpa;
  private $year;
  public $major;
  
  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function printName()
  {
    echo "name:".$this->name.PHP_EOL;
  }
  
  public function setGPA($gpa)
  {
    $this->gpa = $gpa;
  }
}

$myStudent = new Student("Daniel");
$myStudent->major = "Information Technology";
$myStudent->setGPA(2.3);
$myStudent->printName();

$var = "some value";
$number = 412434234234;
$realNumber = 123213.123123;
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5345435.345345;
$arr[] = array("food","water","shelter","heart");

/*

This is all comments
haha
haha

*/

# This is a comment, yo
//print_r($arr);//this is a comment
//var_dump($arr);

echo "end script".$argv[0].PHP_EOL;

?>