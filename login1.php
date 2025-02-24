<?php
    include("connection.php");
?>


<!doctype html>
<html lang="en">

<head>
    <title>Login & Sign up Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<style>
    body {
    background-color: #4158D0;
    background-image: linear-gradient(90deg, #a5b1eb 0%, #A1FFCE 46%, #FAFFD1 100%);
    background-size: 100% 100%;
}
.main {
    background-color: rgba(255, 255, 255, 0.219);
    backdrop-filter: blur(2px);
    border-radius: 25px;
}
input {
    outline: none;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid dodgerblue;
    width: 100%;
    position: relative;
    bottom: 0px;
}
.form-group {
    height: 70px;
}

label {
    position: relative;
    font-size: 18px;
    color: rgb(58, 58, 58);
    top: 32px;
    left: 5px;
    transition: .3s;
    z-index: -1;
}

.label-selected {
    position: relative;
    font-size: 13px;
    color: rgb(82, 82, 82);
    top: 5px;
    left: 5px;
}

button {
    border: none;
    background-color: dodgerblue;
    color: #fff;
    font-weight: 500;
    padding: 10px;
    width: 100px;
    border-radius: 30px;
    margin-left: 75%;
    transition: .5s;
    transform: translate(0px, 0px);
}

button:hover {
    box-shadow: 0px 8px 15px -10px rgb(61, 61, 61);
    transform: translate(0px, -3px);
}

.links {
    font-size: 14px;
    color: rgb(3, 48, 197);
}

#overlay {
    background-color: #fff;
    height: 550px;
    width: 600px;
    position: absolute;
    transform: translate(0px, -25px);
    border-radius: 25px;
    background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20210814/pngtree-blue-purple-simple-gradient-background-image_760572.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    transition: .5s;
}

@media only screen and (max-width: 600px) {
    body {
        background-color: lightblue;
    }
    #overlay ,#signUp{
        display: none;
    }
    button{
    margin-left: 65%;

    }
}
</style>

<body>
    
  <header>
    <!-- <a href="#" class="logo"><img src="ImagesB/logof.png" alt=""></a>    -->

    <ul class="navmenu">
      <li><a href="index.php">Home</a></li>
      <li><a href="school.php">School</a></li>
      <li><a href="product.php">Uniforms</a></li>
      <li><a href="category.php">Category</a></li>
      <li><a href="aboutus.php">About</a></li>
   
    </ul>

    <div class="nav-icon">
      <a href="#"><i class='bx bx-search'></i></a>
      <a href="login1.php"><i class='bx bxs-user-circle'></i></a>
      <a href="index1.php"><i class='bx bx-cart' ></i></a>

      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>
  


    <div class="container  p-4">
        <div class="row main mt-5">

            <!-- sign up form -->
            <div class="col-md-6 p-5 " id="signUp">
                <h1 class="display-4 text-center ">Sign up</h1>
                <form class="d-flex justify-content-center mt-4" action="signup.php" method="POST" >
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Password</label>
                            <input type="password" name="password">
                        </div>
                        <button type="submit" name="signup_submit">Register</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="loginLink">Already have an Account ?</a>
                        </div>
                    </div>
                </form>
            </div>



            
            <!-- Login Form  -->
           
            <div class="col-md-6 p-5 " id="login">
                <h1 class="display-4 text-center ">Login</h1>
                <form class="d-flex justify-content-center mt-4" action="login_submit.php" method="POST" >
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Password</label>
                            <input type="password" name="password">
                        </div>
                        <button type="submit" name="submit" >Login</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="registerLink">Create an Account ?</a>
                            <a class="links" href="#" >forget Password ?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div  id="overlay">

            </div>
        </div>

    </div>



    <script>

document.querySelectorAll('input').forEach((item) => {
    item.addEventListener("focus", function () {
        item.previousElementSibling.className = 'label-selected';
    })
    item.addEventListener("blur", function () {
        console.log(item.value);
        if (item.value === '') {
            item.previousElementSibling.className = '';
        }
    })
})

document.getElementById("registerLink").addEventListener("click", function () {
    if (window.innerWidth < 600) {
        document.getElementById("signUp").style.display = 'block';
        document.getElementById("login").style.display = 'none';
    }
    else {
        document.getElementById("overlay").style.transform = 'translate(550px , -25px)';
    }
})
document.getElementById("loginLink").addEventListener("click", function () {
    if (window.innerWidth < 600) {
        document.getElementById("login").style.display = 'block';
        document.getElementById("signUp").style.display = 'none';
    }
    else {
        document.getElementById("overlay").style.transform = 'translate(0px , -25px)';
    }
})



    </script>

    <!-- contact section -->
 <section class="con-up">
    <div class="up-center-con">
        <!-- <h2>Contact us</h2> -->
    </div>
  <section class="contact">
    <div class="contact-info">
        <div class="first-info">
             <!-- <img src="ImagesB/logof.png" alt="">  -->
             <a href="#" class="logo"><img src="ImagesB/logof.png" alt=""></a>
            <p>3245 GRANT Street Longview<br> TX united kingdom 7653547</p>
            <p>016766477745</p>
            <p> anshsharma54030@gmail.com</p>
            <div class="social-icon">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
            </div>
        </div>
        <div class="second-info">
            <h4>Support</h4>
            <p>contact Us</p>
            <p>About Page</p>
            <p>Size Guide</p>
            <p> Shopping and Resturns</p>
            <p>Privacy</p>
            
            
  
        </div>
        <div class="third-info">
          <h4>Shop</h4>
                  <p>Mens Shopping</p>
                  <p>Women Shopping</p>
                  <p>Kids</p>
                  <p>accesrise</p>
                  <p>Discount</p>
              </div>
              <div class="fourth-info">
                  <h4>Company</h4>
                  <p>About</p>
                  <p>Blog</p>
                  <p>affillite</p>
                  <p>Login</p>
              </div>
              <div class="five">
                  <h4>Subscribe</h4>
                  <p>recive update , hot deals discounts ndfvhdf fdnbdhfg </p>
  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ex aliquam quam necessitatibus </p>
                  <p>recive update , hot deals discounts ndfvhdf fdnbdhfg </p>
              </div>
          </div>
      </section>
      <div class="end-text">
          <p>Copyright 0 @2022. All rights reserved designed by anshu sharma </p>
      </div>
  
    <script src="java.js"></script>

</body>
</html>