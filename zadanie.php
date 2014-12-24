<?php
namespace   Interfaces;

interface CrudInterface{
   public function create();
   public function read(); 
   public function update();
   public function delete();
}
 

namespace AbstractClasses;

 abstract class AbstractCrud  implements  \Interfaces\CrudInterface {
   public function create(){echo"create";}
   public function read(){echo "read";}
   public function update(){echo "update";}
   public function delete(){echo "delete";}

abstract public function bulkUpdate();
abstract public   function bulkDelete();
}

namespace Classes;

class Crud extends \AbstractClasses\AbstractCrud  {
  
  public function bulkUpdate() {echo"bulkUpdate";}
  public   function bulkDelete() {echo"bulkDelete";}
 }

 
 $obj=new Crud();
 $obj->create();
 $obj->bulkUpdate();


?>