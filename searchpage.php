<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/3e3dd49a97.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>

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
<?
  extract($_POST);
if(isset($serbtn))
{
                include_once("./database.php");
                $link= mysqli_connect($hostname,$username,$password,$databasename);
                $qry= "select * from cart where pro_name like '%$serctrl%' or price like '%$serctrl%'";
                // echo $qry;
                $resultset= mysqli_query($link,$qry);
}
?>
<table>
        <div id="logo">
            <tr>
            <td width="800px" ><img class="logo" src="mimg/decorr.png" ></td>
            <td class="searchBox" >
                <span>
                    <input class="searchInput"type="text" name="" placeholder="Search">
                    <i input type="submit" class="fa-solid fa-magnifying-glass fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i>
               </span>
            </td>
            <td width="70px" align="center"><i class=" heart fa-solid fa-heart fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i></td>
            <td width="70px" align="center"><i class=" cart fa-regular fa-cart-shopping fa-2xl" style="color: rgba(148, 74, 40, 0.92);"></i></td>
            <td width="60px" align="center"><i class="fa-solid fa-user-large fa-2xl" style="color:rgba(148, 74, 40, 0.92);"></i></td>
            </tr>
        </div>
    </table>
<section>
    <div class="row">
            <?php
                while($row=mysqli_fetch_assoc($resultset))
                {
            ?>
            <div class='col-lg-3 col-md-4 col-sm-6 mt-3'>
            <div class="card" style="flex-basis: 20%;">
          <img src="<?php echo $row['pro_photo']; ?>" class="img" HEIGHT="350PX"  class="card-img-top" />
          <div class="card-body">
              <h5 class="card-title"><b><?php echo $row['pro_name']; ?></b></h5>
              
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-primary btn-block"><a class="add" href="#" ><b>Add Cart</b></a></button>
          </div>
        </div>
            </div>
            <?php
                }
            ?>
    </div>
</section>


<?php include_once('./footer.php'); ?>
