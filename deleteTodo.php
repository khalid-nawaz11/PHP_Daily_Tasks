<?php
require_once "database.php";

    $id=$_POST["id"];

    $todoList3 = new Todo();
    
    $todoList3->delete($id);
?>
