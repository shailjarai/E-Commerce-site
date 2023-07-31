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
    <title>Hello, world!</title>
    <style type="text/css">
      body
      {
          background-image: url(mimg/polotno-12.png);
          background-repeat: no-repeat;
      }
      .container
        {
            align-items: center;
            margin-left: 450px;
            margin-top: 200px;
        }
      form
      {
        background-image: url(mimg/polotno-13.png);
        background-repeat: no-repeat;
        width: 500px;
            padding:15px 15px 15px 15px;
            border-radius: 2%;
      }
      .head
      {
        font-size: 25px;
        padding-left: 150px;
        
      }
      label
        {
            font-size: 20px;
        }
        #box
        {
          font-size: 20px;
            border: none;
            border-radius: 3px;
            width:470px;
            
        }
      </style>
  </head>
  <body>
    <div class="container">
    <form method="post">

        <!-- <table border="2px" align="center" style="margin-top: 200px;">
            <tr><td colspan="2" align="center"><b>CREATE ACCOUNT</b></td></tr>
            <tr><td>User Name</td><td><input type="text" placeholder="enter username" name="unm"></td></tr>
            <tr><td>Mail</td><td><input type="email" placeholder="enter your mail" name="umail"></td></tr>
            <tr><td>Mobile</td><td><input type="tel" placeholder="enter mobile" name="umob"></td></tr>
            <tr><td>Create Password</td><td><input type="password" placeholder="enter password" name="upwd"></td></tr>
            <tr><td colspan="2" align="center"><input type='submit' name='subbtn' value='Sign Up'></td></tr>
            
        </table> -->
        <label class="head"><b>Create Account</b></label>
            
            <br><br>
            <label><b>User Name</b></label><br>
            <input type="text" name="unm" id="box" placeholder=" Enter username">
            <br><br>
            <label><b>Email</b></label><br>
            <input type="text" name="umail" id="box" placeholder="Enter email">
            <br><br>
            <label><b>Mobile no.</b></label><br>
            <input type="text" name="umob" id="box" placeholder="+91">
            <br><br>
            <label><b>Password</b></label><br>
            <input type="text" name="upwd" id="box" placeholder="Ex:45min">
            <br><br>
            <!-- <buttom class="btn btn-primary btn-block" name="subbtn">Sign Up</buttom> -->
            <input class="btn btn-primary btn-block" type='submit' name='subbtn' value='Sign Up'>
    </form>
  </div>
    <?php
            extract($_POST);
            if(isset($subbtn))
            {
                include_once("./database.php");
               $link= mysqli_connect($hostname,$username,$password,$databasename);
               $qry="insert into user_data(uname,uemail,umobile,upass) values('$unm','$umail','$umob','$upwd')";
               $r= mysqli_query($link,$qry);
               if($r==1)
               {
                // echo "record inserted";
                header("location:login.php");
               }
               else
               {
                echo "insertion failed";
               }
               mysqli_close($link);
             
            }
     ?>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
   
  </body>
</html>  