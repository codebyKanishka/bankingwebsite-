<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0450856bbb.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="styling.css"> -->
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Ubuntu&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap');
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
/* body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    box-sizing: border-box;
} */
#home{
    background-image: url('bac.jpg');
    background-repeat: no-repeat;
    background-size: contain;
    /* height: 50rem;
    width: 100rem; */
}
/* {
   
    margin: 0;
    padding: 0;

} */
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



.container{
    display: flex;
    flex-direction: column;
    margin-top: 30rem;
    align-items: center;
    justify-content: space-evenly;
    background-color: aliceblue;
    width: 70rem;
    height: 20rem;
    border-radius: 3rem;
    padding: 2rem;
}
.card{
    margin-left: 2rem;
    margin-right: 2rem;
    
    

}
.card-img-top{
    height:5rem;
    width:5rem;
}
    </style>
</head>
<body>
  <section id="home" style="margin-top:0;margin-right:0; margin-left:0;height: 50rem;">
  <nav class="navbar">
        <ul>
            <li class="brand">THE SPARKS BANK</li>
            
            <li><a href="index2.php" style="color:white;">Members</a></li> 
            <li><a href="index.php" style="color:white;">Transfer</a></li>
            <li><a href="#home_section" style="color:white;">Facilities</a></li>
           
            
             
        </ul>
        </nav>
  
  <h1 class="header" style="margin-top:10rem;color:white;margin-left: 10rem;">WELCOME  TO   THE</h1>
  <h1 class="header" style="margin-left: 10rem;color:white;">THE SPARKS BANK</h1>
  
  <p style="color: white; font-size:larger; margin-left:5rem;">We Welcome you to experience a helping hand to amange your finances..!</p>
  <button  class="btn btn-info" type="submit" style="margin-left:20rem; width:7rem;"><a href="#home_section" style="text-decoration:none; color:white">EXPLORE-></button>
  <h5 style="margin-top: 10rem;">Made by Kanishka wadhwani for #Grip_December2022</h5>
  </section>
  
 <br>
  <section id="home_section" style=" background-image:url('bac1.jpg');background-repeat:no-repeat;background-size:contain; padding-top:7rem;height:70rem;">
  <div class="container" style="margin-top: 5rem;">
    <h3 style="text-align:center ; color:black">Our top facilities</h3>
    <div style="display: flex;">
    <div class="card" style="width: 18rem;">
        <img src="people-group-solid.svg" class="card-img-top" alt="...">
        <div class="card-body" >
          <h5 class="card-title" style="text-decoration: none;color:black; ">VIEW ALL CUSTOMERS</h5>
          <p class="card-text" style="color: black;">To view all the customers with the bank</p>
          <a href="index2.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="rotate-solid.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">TRANSFER MONEY</h5>
          <p class="card-text">Click to easy transfer of money.</p>
          <a href="index.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="user-solid.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">About us</h5>
          <p class="card-text">To know more about our bank and facilities.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  </section>
</body>
</html>