<?php 


namespace App\core\security;

class Security
{

  // hash passwoard:
  // sanitize:
  // csrf attack ?

  public static function sanitize($input)
  {
    return htmlspecialchars($input);
  }

  public static function hashPasswoard($password)
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }
}