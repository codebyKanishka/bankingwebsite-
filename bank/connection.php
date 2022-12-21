<?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="bank";

            $conn=new mysqli($servername,$username,$password,$database);
            // if($conn->connect_error)
            // {
            //     die("Connection failed: ".$conn->connect_error);
            // }
            if(!$conn){
                echo "Server connection failed due to -->" .mysqli_connect_error();
            }

?>