<?php
class User
{
  public $name;
  public $surname;
  public function __construct($name,$surname)
  {
    $this->name=$name;
    $this->surname=$surname;
  }
  public function get_name()
  {
    return $this->name;
  }
  public function get_surname()
  {
    return $this->surname;
  }
  public function get_fullname()
  {
    return FullName::get($this->get_name(),$this->get_surname());
  }
}
?>