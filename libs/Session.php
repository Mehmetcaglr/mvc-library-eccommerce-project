<?php

class Session {

    public static function init () {
         session_start();
      }

  public static function set ($key,$value) {
    $_SESSION[$key]=$value;
   //$_SESSİON["kullnaıcı adı"]="Mehmet";
  }

  public static function get ($key) {

    if (isset($_SESSİON[$key]))

    return $_SESSION[$key];

  }
  public static function destroy() {

    session_destroy();

  }



}






?>