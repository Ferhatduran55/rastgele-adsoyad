<?php
define('ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
require_once "Classes/Main.php";
?>
<!DOCTYPE html>
<html lang="<?=substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rastgeleİsim</title>
    <?php FileManagement::GetAssets("css"); ?>
    <?php FileManagement::GetAssets("js"); ?>
  </head>
  <body class="bg-dark">
    <?php $user = UserManagement::NewUser(); ?>
    <div class="container-fluid">
      <div class="row">
        <div style="font-size:4vh;" class="col-12 m-1 p-2 bg-info text-white text-center">
          <?=$user->get_fullname();?>
        </div>
        <div class="col-12 d-flex" style="align-items:center;justify-content:center;">
          <button onclick="window.location.href='';" class="btn btn-success">Yeni Üret</button>
        </div>
      </div>
    </div>
    <?php UserManagement::RemoveUser($user);?>
  </body>
</html>
