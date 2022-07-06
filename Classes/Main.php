<?php
class Main
{
  static $dir = "Classes/";
  static $classes = array(
    "FullName",
    "User",
    "UserManagement",
    "FileManagement"
  );
  static $prefixClass = "";
  static $suffixClass = ".class.php";
  public static function StartClasses()
  {
    foreach(self::$classes as $class)
    {
      $classFile = self::$dir.self::$prefixClass.$class.self::$suffixClass;
      if(file_exists($classFile))
      {
        require_once($classFile);
      }
    }
    return "StartClasses process finished!";
  }
}
Main::StartClasses();
?>