<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0450856bbb.js" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        
        body{
    background-image: url('bac2.webp');
    color: white;
    background-repeat: no-repeat;
    background-size: cover;
    height: 50rem;
    width: 90rem;
    margin: 0;
    padding: 0;

    
}
h1{
    /* margin-top: 50px; */
    margin-left: 50px;
    padding-top: 50px;
}
    

/* {
   
    margin: 0;
    padding: 0;

} */
 /* background-color: white; */

a{
    text-decoration: none;
    
}


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        input {
            margin-top: 10px;
            width: 230px;
            height: 40px;
            border-radius: 5px;
            outline: none;
        }

        ::placeholder {
            padding: 10px;
            color: orange;
        }

        button {
            color:blue;
            background: white;
            border-color: blue;
            padding: 14px 20px;
            cursor: pointer;
            width: 100%;

        }

        button:hover {
            color: white;
            background: #4CAF50;
            border: none;
            opacity: 0.8;
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
.navbar ul{
    display: flex;
    list-style-type: none;
    /* justify-content: spac*/
    /* right: 0; */
}
nav ul li{
    color: white;
    
    padding-left: 5rem;
    padding-right:5rem;
    padding-top: 2rem;
    /* right: 0; */
}
    </style>
</head>

<body>
    <nav class="navbar">
<ul>
            <li class="brand">THE SPARKS BANK</li>
            <li><a href="home.php" style="color:white;">Home</a></li>
            <li><a href="index2.php" style="color:white;">Members</a></li> 
            <li><a href="#home_section" style="color:white;">Facilities</a></li>
           
            
             
        </ul>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:76px;border-radius:10px;color:black">
                    <form method="POST">

                        <?php
                        include 'connection.php';
                        $ids = $_GET['idtransfer'];
                        $showquery = "SELECT * FROM `employees` WHERE  id=($ids) ";
                        $showdata = mysqli_query($conn, $showquery);
                        if (!$showdata) 
                        {
                            printf("Error: %s\n", mysqli_error($conn));
                            exit();
                        }
                        $arrdata = mysqli_fetch_array($showdata);

                        ?>

                        <div class="card-body">

                            <h3>Transfer Details</h3>
                            <label>Name</label>
                            <input type="text" name="name1" value="<?php echo $arrdata['Name']; ?>" required placeholder="Enter your name" /><br><br>
                            <label>Email</label>
                            <input type="text" name="email1" value="<?php echo $arrdata['email']; ?>" required placeholder="Enter email id" /><br><br>
                            <label>Amount</label>
                            <input type="text" name="amount1" value="" style="width:210px;" required placeholder="Enter amount" /><br><br>
                            
                        </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:60px;height:380px;">
                    <div class="card-body">
                        <img src="arrow.jpg" alt="image here" style="width:250px;height:220px;margin-top:40px;">
                        <button name="submit">Proceed to Pay</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card text-center" style="margin-top:76px;border-radius:10px;color:white">

                    <div class="card-body">
                        <h3 style="color:black">Transfer Details</h3>

                        <label>Name</label>
                        <input type="text" name="name2" value="" required placeholder="Enter your name" /><br><br>
                        <label>Email</label>
                        <input type="text" name="email2" value="" required placeholder="Enter email id" /><br><br>


                        <!--  <img src="images/10.png" style="width:130px;height:60px;">  -->
                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>
<br>
<br>
    <a href="index2.php" class="btn btn-light" style="margin-left:13rem;color:blue; border:1px solid blue; width:25rem;">View Customer list-></a>
    </form>
    <?php

    include 'connection.php';

    if (isset($_POST['submit'])) {


        $Sender_name = $_POST['name1'];
        $Sender_email = $_POST['email1'];
        $Sender = $_POST['amount1'];
        $Receiver_name = $_POST['name2'];
        $Receiver_email = $_POST['email2'];



        $ids = $_GET['idtransfer'];
        $senderquery = "SELECT * FROM `employees` WHERE id=$ids ";
        $senderdata = mysqli_query($conn, $senderquery);

        if (!$senderdata) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $arrdata = mysqli_fetch_array($senderdata);

        //receiverquery
        $receiverquery = "SELECT * FROM `employees` WHERE email='$Receiver_email' ";
        $receiver_data = mysqli_query($conn, $receiverquery);

        if (!$receiver_data) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $receiver_arr = mysqli_fetch_array($receiver_data);
        $id_receiver = $receiver_arr['id'];


        if ($arrdata['Balance'] >= $Sender) {
            $decrease_sender = $arrdata['Balance'] - $Sender;
            $increase_receiver = $receiver_arr['Balance'] + $Sender;
            $query = "UPDATE `employees` SET `id`=$ids,`Balance`= $decrease_sender  WHERE `id`=$ids ";
            $rec_query = "UPDATE`employees` SET `id`=$id_receiver,`Balance`= $increase_receiver WHERE  `id`=$id_receiver ";
            $res = mysqli_query($conn, $query);
            $rec_res = mysqli_query($conn, $rec_query);
            // $res_receiver=mysqli_query($conn,$query_receiver);
            if ($res && $rec_res) {
    ?>
                <script>
                    swal("Done!", "Transaction Successful!", "success");
                </script>

            <?php

            } else {
            ?>
                <script>
                    swal("Error!", "Error Occured!", "error");
                </script>

            <?php

            }
        } else {
            ?>
            <script>
                swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
            </script>
    <?php

        }
    }
    ?>





</body>

</html>