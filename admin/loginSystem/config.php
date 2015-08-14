<?
include "class.logsys.php";
/**
 * This configuration is for Subin's Blog Demos page
 * running on RedHat's OpenShift server
 */
\Fr\LS::$config = array(
  "info" => array(
    "company" => "Catch-design",
    "email" => "info@catch-design.nl"
  ),
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "password" => "basjas13",
    "name" => "CatchDesign",
    "table" => "users"
  ),
  "keys" => array(
    "cookie" => "myCookieKey",
    "salt" => "MySaltKey"
  ),
  "features" => array(
    "auto_init" => true
  ),
  "pages" => array(
    "no_login" => array(
      "/admin/loginSystem/",
      "/admin/loginSystem/reset.php",
      "/admin/loginSystem/register.php"
    ),
    "login_page" => "/admin/loginSystem/login.php",
    "home_page" => "/admin/loginSystem/home.php"
  )
);
?>
