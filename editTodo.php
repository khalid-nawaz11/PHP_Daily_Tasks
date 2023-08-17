<?php
require_once "database.php";

    /*$id=$_GET["id"];

    $todoList2 = new Todo();

    $todoList2->edit($id);*/
    $conn = new mysqli("localhost","root","","todo");
    $query = "select * from data where id=".$_GET["id"];
    $obj = $conn->query($query);
    $show = $obj->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit TO-DO</title>
</head>
<body>

    <form action="updateTodo.php" method="POST">
        Enter Your To Do
        <input type="text" name="data" placeholder="Enter your New TO-DO.." value="<?php echo $show["txt"];?>"> <br> <br>

        
        <input type="hidden" name="id" value="<?php echo $show["id"];?>">

        <input type="submit" value="submit">
        <input type="reset" value="Clear">
    </form>



</body>
</html>