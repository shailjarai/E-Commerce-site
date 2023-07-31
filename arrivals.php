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

    <title>shipping</title>
    <script src="https://kit.fontawesome.com/3e3dd49a97.js" crossorigin="anonymous"></script>
    <style type="text/css">
      body
      {
        background-image: url(mimg/White-simple-textured-design-background.jpg);
        background-repeat: repeat-y;
       
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
h1
{
    font-family: "Sofia", sans-serif;
    background-color:rgb(131, 211, 237);
    border-radius: 50%;
    text-align: center;
}
.card-group
{
  height:340px;
  width:300px;
  padding-left: 50px;
  padding-top: 50px;
  border: #000000;
  
  text-align: center;
}
.card-title
{
  color:rgb(4, 150, 191);
}
.add
{
  color:white;
}
a:hover
{
  color: white;
}
.infoo
    {
      display:flex;
      justify-content: space-between;
      padding-left: 45px;
      margin-top: 1000px;
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

.info2
{
  display: flex;
  justify-content: space-between;
  padding-left: 45px;
  font-family: 'REM', sans-serif;
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
  text-align: left;
  color: #002e7a;
}
#ul
{
  color: #002e7a;
  font-family: 'REM', sans-serif;
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
                    <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i>
               </span>
            </td>
            <td width="70px" align="center"><i class=" heart fa-solid fa-heart fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i></td>
            <td width="70px" align="center"><i class=" cart fa-regular fa-cart-shopping fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i></td>
            <td width="60px" align="center"><i class="fa-solid fa-user-large fa-2xl" style="color:rgba(148, 74, 40, 0.92);"></i></td>
            </tr>
        </div>
    </table>
   
    <h1><b> NEW ARRIVALS</b></h1>
    <div class="card-group" style="display: flex; justify-content: space-between;">
      <div class="card" style="flex-basis: 20%;">
          <img src="mimg/c1.png" class="img" HEIGHT="350PX"  class="card-img-top" />
          <div class="card-body">
              <h5 class="card-title"><b>Velvet Grey Organizer Box</b></h5>
              
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary btn-block"><a class="add" href="#" ><b>Add Cart</b></a></button>
          </div>
      </div>
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
  <a id="ul" href="#"><b>Store Locator</b></a><br>
  <a id="ul" href="#"><b>Privacy Policy</b></a><br>
  <a id="ul" href="#"><b>Shipping Policy</b></a><br>
  <a id="ul" href="#"><b>Cancellation Policy</b></a><br>
  <a id="ul" href="#"><b>Terms & Conditions</b></a><br>
  <a id="ul" href="#"><b>Refund & Return Policy</b></a><br>
  <a id="ul" href="#"><b>Refund Policy</b></a><br>
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