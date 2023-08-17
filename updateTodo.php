<?php
require_once "database.php";

    $data=$_POST["data"];
    $id=$_POST["id"];

    $todoList2 = new Todo();
    //echo $data;
    $todoList2->edit($id,$data);
?>
