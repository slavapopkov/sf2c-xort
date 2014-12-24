<?php
namespace AbstractClasses;
require 'Interfaces.php';
 abstract class AbstractCrud  implements  \Interfaces\CrudInterface {
 abstract public function create();
 abstract  function read();
 abstract  function update();
 abstract   function delete();

abstract public function bulkUpdate();
abstract public   function bulkDelete();
}


?>