<?php
class UserManagement
{
  static $adlar = array();
  static $soyadlar = array();
  static $files = "Classes/Files/";
  static $names = "names.txt";
  static $surnames = "surnames.txt";
  public static function GetArrayCount($arr)
  {
    return count($arr)-1;
  }
  public static function GenerateName()
  {
    $name = self::$adlar[mt_rand(0,self::GetArrayCount(self::$adlar))];
    return $name;
  }
  public static function GenerateSurname()
  {
    $surname = self::$soyadlar[mt_rand(0,self::GetArrayCount(self::$soyadlar))];
    return $surname;
  }
  public static function SetupNSN()
  {
    self::SetupNames();
    self::SetupSurnames();
    return true;
  }
  public static function SetupNames()
  {
    $doc = self::$files . self::$names;
    if(file_exists($doc))
    {
      $Dosya = fopen($doc, "r") or exit("Dosya Açılamadı !");
      while(!feof($Dosya))
      {
        array_push(self::$adlar,fgets($Dosya));
      }
       
      fclose($Dosya);
      return "SetupNames process finished!";
    }
  }
  public static function SetupSurnames()
  {
    $doc = self::$files . self::$surnames;
    if(file_exists($doc))
    {
      $Dosya = fopen($doc, "r") or exit("Dosya Açılamadı !");
      while(!feof($Dosya))
      {
        array_push(self::$soyadlar,fgets($Dosya));
      }
       
      fclose($Dosya);
      return "SetupSurnames process finished!";
    }
  }
  public static function GetNames()
  {
    return self::$adlar;
  }
  public static function GetSurnames()
  {
    return self::$soyadlar;
  }
  public static function NewUser()
  {
    return new User(self::GenerateName(),self::GenerateSurname());
  }
  public static function RemoveUser($user)
  {
    unset($user);
    if(!isset($user))
    {
      return "RemoveUser process finished!";
    }
  }
}
UserManagement::SetupNSN();
?>
