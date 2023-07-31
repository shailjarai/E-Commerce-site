<!doctype html>
<?php
  session_start();
  if(!isset($_SESSION["user_name"]))
  {
      header("location:login.php");
  }

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>about</title>
    <script src="https://kit.fontawesome.com/3e3dd49a97.js" crossorigin="anonymous"></script>
    <style type="text/css">
      body
      {
        background-color: rgb(226, 226, 226);
      }
.logo
{
    margin-right: 100px;
    width:300px;
    height:70px;
}
.searchInput
{
    height:33px;
    width:350px;
    border-radius: 40px;
    font-size: 18px;
}
h1
{
  font-family: 'Angkor';
  text-align: center;
  padding-top: 10px;
  color:rgb(3, 3, 151);
}
.p1
{
  text-align: center;
  font-family: 'Angkor';
  color:rgb(3, 3, 151);
  font-size: 30px;
  padding-left: 30px;
  padding-right: 30px;
}
.new
{
  text-align: center;
 margin-top: 150px;
 padding-top: 40px;
 padding-bottom: 40px;
  color:white;
  background-color: rgb(0, 0, 138);
}
button
{
  margin-left: 26px;
  color: white;

}
.infoo
    {
      display:flex;
      justify-content: space-between;
      padding-left: 45px;
    }
.info
{
  flex-basis: 17%;
  font-size: 20px;
  line-height:20px;
  padding-top: 100px;
  color: #002e7a;
  font-family: 'REM', sans-serif;
}
hr
{
  border: 1px solid grey;
}
.info2
{
  display: flex;
  justify-content: space-between;
  padding-left: 45px;
  font-family: 'REM', sans-serif;
}
.concept
{
  text-align: left;
  color: #002e7a;
}
.use
{
  text-align: left;
  color: #002e7a;
  font-family: 'REM', sans-serif;
}
.concept
{
  flex-basis: 30%;
  font-size: 20px;
  line-height:30px;
  padding-top: 100px;
  color: #002e7a;
  align-items: center;
  font-family: 'REM', sans-serif;
}
#ul
{
  color: #002e7a;
  font-family: 'REM', sans-serif;
}
.gif
{
    height: 80px;
    width:80px;
    align-items: center;
    padding-left: 80px;
}
a
{
    text-decoration: none;
    color: rgb(199, 121, 84);
    font-size: 21px;
    padding:12px;
}
a:visited
{
    color:rgb(199, 121, 84);

}
a:hover
{
    color:black;
    text-decoration:underline;
   
}
.kd
{
  display: inline;
 cursor: pointer;
}
nav
{
  margin-top: 0px;
  margin-bottom: 0px;
}
    </style>
  </head>
  <body>
    <table>
        <div id="logo">
            <tr>
            <td width="800px" ><img class="logo" src="mimg/decorr.png" ></td>
            <td class="searchBox" >
                <span>
                    <input class="searchInput"type="text" name="" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i>
               </span>
            </td>
            <td width="70px" align="center"><i class=" heart fa-solid fa-heart fa-2xl" style="color: #000000;"></i></td>
            <td width="70px" align="center"><i class=" cart fa-regular fa-cart-shopping fa-2xl" style="color: #000000;"></i></td>
            <td width="60px" align="center"><i class="fa-solid fa-user-large fa-2xl" style="color:#000000;"></i></td>
            </tr>
        </div>
    </table>
   
    <nav>
      <div class="dropdown">
           <img class="gif" src="mimg/sale.gif" align="center">
            <a href="#"><b>New Arrivals</b></a>
            <a href="#"><b>Best Seller</b></a>
          
            <a class=" kd nav-link dropdown-toggle" href="#" data-toggle="dropdown"><b>Kitchen & Dinning</b></a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Cups & Mugs</a>
            <a class="dropdown-item" href="#">Jar & Containers</a>
            <a class="dropdown-item" href="#">Dinning & Serve</a>
            <a class="dropdown-item" href="#">Kitchen Tools</a>
            <a class="dropdown-item" href="#">Water Bottles & Flasks</a>
            <a class="dropdown-item" href="#">Napkin box & holder</a>
           </div>
            <a href="#"><b>Gifts & Decor</b></a>
            <a href="#"><b>Health & Beauty</b></a>
            <a href="#"><b>Home Accessories</b></a>
            <a href="#"><b>All Collection</b></a>
          </div>
      </nav>
    
    <h1><b>ABOUT US</b></h1>
    <p class="p1">Decor proudly presents an array of different products at incomparable low-cost prices. Its loyal customer base knows Decor as the home of the most affordable, trendy, and latest products.

      For more than a decade, Decor has been present all across India to serve its customers with integrity and trust. If a customer has ever been to a Decor store, probably it wasn’t the only visit. Decor has built a large customer base on a single motto, “Affordability and Quality should go hand in hand”. Decor is continuing with the same tradition and values with their online store as well.
      
      Decor offers prices; 20% to 40%  less than any other online retail store in India. But, when it comes to quality, Decor never compromises. They believe in offering the best of both worlds. Each product is designed by experts to maintain quality and uniqueness. Decor’s team of experts work tirelessly to offer their customers the latest designs and items so that they will find something new each time they come back to Decor for more.
      
      The list of offerings never ends with Decor. It offers shipping across India with every product regardless of its price or customer’s location all across India. Everyone at Decor is continuously working towards making the online shopping experience fun and hassle-free for its customers. </p>

      <div class="new">
        <h4 style="font-size: 35px;"><b>Newsletter</b></h4>

         <p class="p2" style="font-size: 20px;">A short sentence describing what someone will receive by subscribing<br><br>
         <span><input type="text" placeholder="Your email" class="text"><button class="btn btn-info btn-lg"><b>Subscribe</b></button></span>
         </p>
      </div>

      <div class="infoo col-sm-12">
        <p class="info" align="left"><i class=" fas fa-solid fa-truck-fast fa-xl fa-fade" style="color: #002e7a;"></i><br><br><b>Shipping Across India<br>
          Doorstep delivery of every product, all across India without any minimum order requirement.</b></p>
  
          <p class="info" align="left"><i class="fa-solid fa-cart-flatbed fa-xl fa-fade" style="color: #002e7a;"></i><br><br><b>Satisfied or refunded<br>
            Be completely satisfied or get a complete refund with the easy return & refund policy.</b></p>
  
            <p class="info" align="left"><i class="fa-solid fa-headset fa-fade fa-xl" style="color: #002e7a;"></i><br><br><b>Dedicated Help Center<br>
              Get the best online shopping experience with a dedicated team of customer representatives.</b></p>
  
              <p class="info" align="left"><i class="fa-solid fa-building-lock fa-fade fa-xl" style="color: #002e7a;"></i><br><br><b>100% Safe & Secure Payments<br>
                Every online transaction is encrypted and safe. Pay with Debit, Credit, UPI, Wallet, or Net Banking.</b></p>
      </div>
   <hr class="container-fluid">
  
   <div class="info2 col-lg-12">
    <p class="concept"><b>THE CONCEPT<br><br>
      Market99 has a belief that quality and affordability should go hand in hand. With the latest designs and the best quality products, Market99 still manages to offer everything at the lowest price possible, almost 20%-40% cheaper than other online retailers. Each product is unique and limited. Market99 knows every customer has a unique taste and sense of style. That is why each product is specifically designed with limited stocks to preserve its uniqueness
    </b></p>
  <p class="concept"><b>USEFUL LINKS</b><BR><br>
  <a id="ul" href="#"><b>About Us</b></a><br>
  <a id="ul" href="#"><b>Contact Us</b></a><br>
  
  <a id="ul" href="#"><b>Privacy Policy</b></a><br>
  
  </p>
  <p class="concept"><b>NEWSLETTER<br><br>
  
    Join the Market99 family and be the first to know about the latest online shopping offers, deals, sales, products, and much more by signing up for the Newsletter.</b><br><br>
    <span><input type="text" placeholder="Your email">
    <button class="btn btn-info">Subscribe</button></span>
  </p>
   </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>