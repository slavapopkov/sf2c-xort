<?php
namespace Classes;
require 'AbstractClasses.php';

class Crud extends \AbstractClasses\AbstractCrud  {
   public function create(){echo"create";}
   public function read(){echo "read";}
   public function update(){echo "update";}
   public function delete(){echo "delete";}

  public function bulkUpdate() {echo"bulkUpdate";}
  public   function bulkDelete() {echo"bulkDelete";}
 }

 
 $obj=new Crud();
 $obj->create();
 $obj->read();
 $obj->bulkUpdate();


?>