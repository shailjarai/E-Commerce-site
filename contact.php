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

    <title>contact</title>
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
    padding-left: 100px;
    padding-right: 100px;
    color:rgb(3, 3, 151);
    font-size: 20px;;
}
#ph
{
  color:rgb(3, 3, 151);
  background-color: white;
  margin-left: 50px;
  width:300px;
  height:50px;
}
#ph1
{
  margin-left: 20px;
  width:300px;
  height: 50px;
}
#text
{
  margin-left: 50px;
  width: 622px;
  height:300px;
}
.formm
{
  display: flex;
}
.con
{
  color:rgb(3, 3, 151);
  padding-left: 80px;
  padding-top: 90px;
}
button
{
  margin-left: 50px;
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
    <div>
       <h1><b>Contact Us</b></h1> 
<p class="p1">The Team of customer representatives at Market 99 are more than happy to assist you with everything <br>that you have in mind. If you have any doubts or queries, just fill the below form, and we will contact<br> you as soon as possible.</p>
    </div>

    <div class="formm">
      <form>
        <input id="ph" type="text" placeholder="Your name">
        <input id="ph1" type="text" placeholder="Your email"><br><br>
       <textarea placeholder="Your message" id="text"></textarea><br><br>
       <button class="btn btn-info btn-lg">Send Message</button>
      </form>
      <div class="con">
        <h3><b>Corporate Office</b></h3><br><br>
        <p>D-153, Okhla Industrial Area, Phase 1,<br>
          New Delhi, Delhi 110020, India<br><br>
          
          Office Timings:- Mon-Fri (9:30 A.M-6 P.M)<br><br>
          
          Phone:-  +91-1147366145, +917011934541<br><br>
          
          Email:- support@market99.com</p>

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