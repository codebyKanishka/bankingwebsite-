<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
    background-image: url('bac.jpg');
    
    background-repeat: no-repeat;
    background-size: cover;
    height: 50rem;
    color: white;
    /* width: 90rem; */
    margin: 0;
    padding: 0;

    
}
nav{
    padding: 0;
    margin: 0;
    position: static;
    font-family: 'Ubuntu', sans-serif;
    font-size:larger;
    /* color: white; */
    /* background-color: white; */
}
a{
    text-decoration: none;
    
}
.navbar ul{
    display: flex;
    list-style-type: none;
    /* justify-content: spac*/
    /* right: 0; */
}
nav ul li{
    color: white;
    
    padding-left: 5rem;
    padding-right: 5rem;
    padding-top: 2rem;
    /* right: 0; */
}

h1{
    /* margin-top: 50px; */
    margin-left: 50px;
    /* padding-top: 50px; */
}
table{
    font-weight: bolder;
    text-shadow: 3px 3px 3px black;

}
    
    </style>
</head>
<body >
<nav class="navbar">
        <ul>
            <li class="brand">THE SPARKS BANK</li>
            
            <li><a href="home.php" style="color:white;">Home</a></li> 
            <li><a href="index2.php" style="color:white;">Members</a></li>
            <li><a href="#home_section" style="color:white;">Facilities</a></li>
           
            
             
        </ul>
</nav>
    <h1>View all Customers</h1>
     <br>
     <table class="table" style=" color:white;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                

                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
          
            include 'connection.php';
            $sql="SELECT * FROM employees";
            $result=$conn->query($sql);

            if(!$result)
            {
                die("Invalid query: ".$conn->error);
            }
            while($row=$result->fetch_assoc())
            {
                ?>
                
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            
           
            <td>
            <a href="t1.php?idtransfer=<?php echo $row['id']; ?>" style="text-decoration:none; color:red;font-size:larger;" >Transfer
            </a>
            </td>
            </tr>
        <?php

            }


            ?>
          
        </tbody>

     </table>
     <h5 style="margin-top: 8rem;">Made by Kanishka wadhwani for #Grip_December2022</h5>

</body>
</html>