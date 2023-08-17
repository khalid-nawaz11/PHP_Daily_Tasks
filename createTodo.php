<?php
require_once "database.php";

    $data=$_POST["input"];

    $todoList = new Todo();

    $todoList->create($data);


?>