<?php
class FileManagement
{
  static $dir = "Assets/";
  static $assets = array(
    "Assets" => array(
      "css" => array(
        "bootstrap.min.css",
        "main.css"
      ),
      "js" => array(
        "jquery.min.js",
        "bootstrap.bundle.min.js",
        "main.js"
      ),
    ),
  );
  public static function GetAssets($arg)
  {
    if(isset($arg))
    {
      switch($arg)
      {
        case "css":
        foreach (self::$assets["Assets"]["css"] as $file)
        {
          $asset = self::$dir."css/".$file;
          echo '<link rel="stylesheet" href="'.$asset.'"/>';
        }
          break;
        case "js":
        foreach (self::$assets["Assets"]["js"] as $file)
        {
          $asset = self::$dir."js/".$file;
          echo '<script src="'.$asset.'"></script>';
        }
          break;
      }
    }
  }
}
?>