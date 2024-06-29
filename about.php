<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');
        *{
          padding: 0px;
          margin: 0px;
          box-sizing: border-box;
          font-family: 'Spartan', sans-serif;
        }
        body{
          width: 100%;
        } 
        p{
         font: 5px;
         color: #212322;
          margin:15px 0 20px 0;
        }
        #banner h3{
        font-size: 46px;
        font-weight: 54px;
        color: #264348;        ;
        text-align: center;
        padding: 10px;
        /* margin-top:0.5rem; */
        font-family:Georgia, 'Times New Roman', Times, serif;
        
        }
        h4{
          font-size: 20px;
           color: #222;
        }
        .section-p1{
            padding: 40px 80px;
        }
        /* Header Start  */
        #header{
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px 50px;
          background: #e5e6ea;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
          z-index: 999;
          position: sticky;
          top: 0;
          left: 0;
        }
        #navbar{
          display: flex;
          align-items:center ;
          justify-content: center;
        }

        #navbar li{
          list-style: none;
          padding: 0 20px;
          position: relative;
        }

        #navbar li a{
          text-decoration: none;
          font-size: 16px;
          font-weight:600;
          color:#1a1a1a;
          transition: 0.3s ease;
        }   
        #navbar li a:hover,
        #navbar li a:active{
          color: #088178;
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
          content: "";
          width: 30%;
          height: 2px;
          background: #088178;
          position: absolute;
          bottom: -4px;
          left: 20px;
        }

        #mobile{
          display: none;
          align-items: center;
        }

        #close{
          display: none;
        }
        /* About start */
        #banner{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    height: 20vh;
    background-size: cover;
    background-position: center;
    background-image: url("img/logo/pexels-steve-1000366.jpg");
        }

        #about-head{
            display: flex;
            align-items: center;
        }
        #about-head img{
            width: 50%;
            height: auto;
        }
        #about-head div{
            padding-left: 20px;
            
        }
        #about-head p{
            font-size: 25px;
            color: #841b2d;
            font-family:Georgia;
            
        }
        #about-head #para{
          color:#841b2d;
          font-family: serif;
        }

        /* Footer starts here */
        footer{
          display: flex;
          flex-wrap:wrap;
          justify-content: space-between;
          background-color: #f1eeee;
        }

        footer .col {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          margin-bottom: 20px;
        }

        footer .logo{
           margin-bottom: 30px;
        }

        footer h4{
           font-size: 14px;
           padding-bottom: 10px;
           font-size: large;
            color: #222;
        }
        footer p{
           font-size: 13px;
           padding-bottom: 0 0 6x 0;
        }
        footer a{
           font-size: 13px;
           text-decoration: none;
           color: #222;
           margin-bottom: 5px; 
        }
        footer .follow{
           margin-top: 20px;
        }
        footer .follow i{
           color: #465b52;
           padding-right: 4px;
           cursor: pointer;
        }
        footer .install .row img{
           border: 1px solid #088178;
           border-radius: 6px;
        }
        footer .install img{
           margin: 10px 0 15px 0;
        }
        footer .follow i:hover,
        footer a:hover {
            color:#088178;
        }
        footer .copyright {
          width: 100px;
          text-align: center;
        }

/* Start Media Query */

@media(max-width:799px){
     .section-p1{
        padding: 40px 40px;
     }
    #navbar {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        position: fixed;
        top: 0;
        right: -300px;
        height: 100vh;
        width:300px ;
        background-color: #e3e6f3;
        box-shadow: 0 40px 60px rgba(0,0,0,0.1);
        padding: 80px 0 0 10px;
        transition: 0.3s;
    
    }

#navbar.active {
    right: 0px;
}

#navbar li {
    margin-bottom: 25px;
}
#mobile {
    display: flex;
    align-items: center;
}

#mobile i{
    color: #1a1a1a;
    font-size: 24px;
    padding-left: 20px;
}

#close{
    display: initial;
   position:absolute;
   top:30px;
   left:30px;
   color: #222; 
   font-size: 24px;

}

#lg-bag{
    display: none;
}
}

@media (max-width: 477px){
    .section-p1{
        padding: 20px;
    }
    #header {
        padding: 7px 15px;
        
    }
}
    </style>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo/logo1.jpg" class="logo" alt="" height="100px"></a>
      
    <div>
        <ul id="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a class="active" href="about.php">About</a></li>
            <li><a href="login_reg.php">Login/Signup</a></li>
            <li id="lg-bag"><a href="cart.html">Cart</a><i class="fa-solid fa-cart-shopping"></i></li>
            <a href="#" id="close"><i class="fa-sharp fa-solid fa-xmark"></i></a>
          </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"></a><i class="fa-solid fa-cart-shopping"></i>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

   <section id="banner" class="section-m1">
    <h3 >About Us</h3>
   </section>

    <section id="about-head" class="section-p1">        
        <img src="img\36b885107148725.5fa08100392dd.jpg" alt="">        
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus dolore eaque asperiores error esse officia excepturi saepe? Corporis assumenda unde omnis voluptates, distinctio incidunt fugiat porro ipsa blanditiis sapiente quae ipsam tempora, aliquid animi molestiae, delectus nulla! Natus porro laudantium sequi numquam quia cum minima voluptatum mollitia accusantium. A, eos.</p>
            <br>
            <p id="para"><strong>Our objective is to provide our customers with the best quality products & services.</strong></p>
        </div>   
    </section>

    <footer class="section-p1">
        <div class="col">
         <img class="logo" src="img/logo/logo1.jpg" alt="" height="80px" >
         <h4>Contact</h4>
         <p><strong>Address:</strong> Wellington Road, street 56,San Francisco</p>
         <p><strong>Phone:</strong> +01 222 45478/ (+91) 01 2344 6655</p>
         <p><strong>Hours:</strong>10: 00 - 18:00, Mon - Sat </p>
         <div class="follow">
           <h4>Follow Us</h4>
           <div class="icon">
             <i class="fab fa-facebook-f"></i>
             <i class="fab fa-twitter"></i>
             <i class="fab fa-instagram"></i>
             <i class="fab fa-pinterest-p"></i>
             <i class="fab fa-youtube"></i>
            </div>
           </div>
         </div>

         <div class="col">
           <h4>About</h4>
           <a href="#">About Us</a>
           <a href="#">Delivery Information</a>
           <a href="#">Privacy Policy</a>
           <a href="#">Terms & Conditions</a>
           <a href="#">Contact Us</a>  
         </div>
     
         <div class="col">
           <h4>My Account</h4>
           <a href="#">Sign In</a>
           <a href="#">View Cart</a>
           <a href="#">My Wishlist</a>
           <a href="#">Track My Order</a>
           <a href="#">Help</a>  
         </div>

         <div class="col install">
           <h4>Install App</h4>
            <p>From App Store & Google Play</p>
         <div class="row">
            <img src="img/logo/app.jpg" alt="" width="150px">
            <img src="img/logo/play.jpg" alt=""width="150px">
         </div>
         <p>Secured Payment Gateways</p>
            <img src="img/logo/pay.png" alt="" width="200px">
       </div>

       
       </footer>
</body>
</html>