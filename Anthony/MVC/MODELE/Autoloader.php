<?php
class  Autoloader
{
  static function register()
  {
    spl_autoload_register(array(__CLASS__,'autoLoad'));
  }
  static function autoload($class_name)
  {
    $rep = array(
            'MODELE/dao/', //repertoire contenant la DAO
            'MODELE/dto/' //repertoire contenant la DTO
          );
    foreach( $rep as $dir ) {
      if (file_exists($dir.$class_name.'.php')) {
      require_once($dir.$class_name.'.php');
      }
    }
  }
}
