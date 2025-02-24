<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School uniform management</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">





<style>
   /* body {
    background-color: #4158D0;
    background-image: linear-gradient(90deg, #a5b1eb 0%, #A1FFCE 46%, #FAFFD1 100%);
    background-size: 100% 100%;
} */


/* body {
    background-color: #4158D0;
    background-image: linear-gradient(90deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    background-size: 100% 100%;
} */


</style>
</head>
<body>

  <header>
      <a href="#" class="logo"><img src="ImagesB/logof.png" alt=""></a>   

    <ul class="navmenu">
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="product.html">Products</a></li>
      <li><a href="#">Category</a></li>
      <li><a href="#">About</a></li>
   
    </ul>

    <div class="nav-icon">
      <a href="#"><i class='bx bx-search'></i></a>
      <a href="login.html"><i class='bx bxs-user-circle'></i></a>
      <a href="cart.html"><i class='bx bx-cart' ></i></a>

      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>


  <section>

    

    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="ImagesB/ig3.jpeg">
            </div>
            <div class="images">
                <div class="small-img">
                    <!-- <img src="img/p1.png" onclick="showImg(this.src)"> -->
                </div>
                <div class="small-img">
                    <!-- <img src="img/p2.png" onclick="showImg(this.src)"> -->
                </div>
                <div class="small-img">
                    <!-- <img src="img/p3.png" onclick="showImg(this.src)"> -->
                </div>
                <div class="small-img">
                    <!-- <img src="img/p4.png" onclick="showImg(this.src)"> -->
                </div>
            </div>
        </div>

        <div class="right">
           
            <div class="pname">T-Shirts for Men</div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">$40</div>
            <div class="size">
                <p>Size :</p>
                <div class="psize active">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div>
            <div class="quantity">
                <p>Quantity :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn">Add to Cart</button>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </div>
</section>


    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>
</body>
</html>