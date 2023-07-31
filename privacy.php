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

    <title>privacy</title>
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
h2
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
  font-size: 25px;
  padding-left: 70px;
  padding-right: 70px;
}
h4
{
    font-family: 'Angkor';
  text-align: center;
  padding-top: 10px;
  color:rgb(3, 3, 151);
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
    
 <h2><b>Privacy Policy</b></h2>
 <p class="p1">Privacy Policy

    This privacy policy sets out how Market99 uses and protects any information that customers give market99.com while using the website.
    
    Market99.com is committed to ensuring that the privacy of every customer is protected. Market99 asks customers to provide certain information for identification while using the website for a better and more personalised online shopping experience; customers should be comfortable, as it will only be used in accordance with this privacy statement.
    
    Online transactions are electronically encrypted to ensure that the financial data of a customer is safe and secure; customers may use credit cards online with confidence. In addition, the address, phone number, and financial data of customers will be used only by Market99 and will never be sold or revealed to anyone else.
    
    Market99 is committed to maintaining confidence and trust and accordingly maintains the following privacy policy to protect the personal information customers provide online:
    
    It's Market99's policy that personal information, such as customer's name, address, email address, telephone number, and financial information, is private and confidential.
    
    The personal information of a customer will only be used by market99.com and will never be sold or revealed to outside sources.
    
    Market99 may collect the following information.
    
    Name and date of birth
    Contact information including, email address and phone number
    Demographic information such as postcode, preferences and interests
    Other information relevant to customer surveys and offers</p><br><br>
    <h4><b>What Market99 does with the information they gather:</b></h4><br>
    
    <p class="p1">Market99 requires this information to understand the needs of its customers and to provide customers with a better service, and in particular for the following reasons:
    
    Internal record keeping.
    Market99 may use the information to improve their products and services.
    Market99 may periodically send promotional emails about new products, special offers or other information which they think customers may find interesting using the email address provided by the customers.
    Market99 may also use some information to contact customers for market research purposes. Market99 may contact customers by email, phone, fax or mail. Market99 may use the information to customize the website according to the customer's interests.
    If customers believe that any information Market99 is holding on to customers is incorrect or incomplete, It advises them to write or email on support@market99 as soon as possible. Market99 will promptly correct any information found to be incorrect.</p>

   
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