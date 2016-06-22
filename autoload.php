<?
function __autoload($class_name) {
  include './libs/' . $class_name . '.php';
}
?>