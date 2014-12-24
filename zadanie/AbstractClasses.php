<?php
namespace  AbstractClasses;
require 'Interfaces.php';
 use  Interfaces\CrudInterface;
 abstract class AbstractCrud  implements  CrudInterface{
  function  create(){}
  function  read(){}
  function  update(){}
  function  delete(){}

abstract public function  bulkUpdate();
abstract public   function  bulkDelete();
 }


?>