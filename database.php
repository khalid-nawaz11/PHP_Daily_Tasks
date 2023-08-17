<?php


    class Todo{


        private $data;

        public function create($task)
        {
            $conn = new mysqli("localhost","root","","todo");

	        $query = "insert into data(txt) values('".$task."')";

            if($conn->query($query)==TRUE){
            
                header("Location:index.php");
        
            }
            else
            $conn->error;

            conn->close();

        }


        public function edit($id,$task)
        {
            $conn = new mysqli("localhost","root","","todo");

	        $query = "update data set txt='".$task."' where id =".$id;

            if($conn->query($query)==TRUE){
            
                header("Location:index.php");
            }
            else
            $conn->error;

        }


        public function delete($id)
        {
            $conn = new mysqli("localhost","root","","todo");

	        $query = "delete from data where id =".$_GET["id"];

            if($conn->query($query)==TRUE){
            
                header("Location:index.php");
            //    echo $task;
            }
            else
            $conn->error;

           // conn->close();

        }






    }

    













?>