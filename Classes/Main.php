<?php
class Main
{
  static $dir = "Classes/";
  static $classes = array();
  static $prefixClass = "";
  static $suffixClass = "";
  public static function StartClasses()
  {
    $thisFile = "Main.php";
    $classDir = scandir("./Classes");
    foreach($classDir as $classDirFile)
    {
      $file = self::$suffixClass.$classDirFile.self::$prefixClass;
      if($thisFile!=$file && $file!="Files" && $file!="." && $file != "..")
      {
        array_push(self::$classes,$file);
      }
    }
    foreach(self::$classes as $class)
    {
      $classFile = self::$dir.self::$suffixClass.$class.self::$prefixClass;
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
