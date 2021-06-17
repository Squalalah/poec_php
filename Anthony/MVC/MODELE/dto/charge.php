<?php
//namespace dal;
function __autoload($class)
{
//require_once $class.'.php';
require_once ("dao/"."$class.'.php'");
require_once ("dto/"."$class.'.php'");
}
