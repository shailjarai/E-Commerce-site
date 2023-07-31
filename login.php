<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
            width: 500px;
            padding:15px 15px 15px 15px;
            border-radius: 2%;
        }
        .head
        {
            font-size: 30px;
            text-align: center;
            padding-left: 200px;
        }
        label
        {
            font-size: 20px;
        }
        #name1
        {
            font-size: 20px;
            border: none;
            border-radius: 3px;
            width:470px;
            
        }
        .reg
        {
            padding-left: 160px;
        }
        .reg1
        {
            padding-left: 210px;
        }

    </style>
  </head>
  <body>
    <section>
        <div class="container">
            <form method="post">
                <!-- <table  align='center' class='mt-3 table table-bordered bg-info' style="width: 50%;">
                    <tbody>
                        <tr><td>User name</td><td><input type='text' name='i_uname'></td></tr>
                        <tr><td>Password</td><td><input type='password'name='i_pwd'></td></tr>
                        <tr><td colspan='2' align='center'><input type='submit' name='loginbtn' value='login' class='btn btn-dark btn-block'><a href="./register.php">register</a></td></tr>
                    </tbody>
                </table> -->
                <label class="head"><b>Login</b></label><br><br>
                <label><b>Name</b></label><br>
                <input type="text" name="i_uname" id="name1" placeholder="Username">
                <br><br>
                <label><b>Password</b></label><br>
                <input type="password" name="i_pwd" id="name1" placeholder="password">
                <br><br>
                <button class="btn btn-primary btn-block" name="loginbtn">LOGIN</button><br>
                <lable class="reg">Don't have an account?<br><a class="reg1" href="register.php"><b>Register</b></a></lable>

            </form>    
        </div>    
    </section>

    <?php
    extract($_POST);
    if(isset($loginbtn))
    {
        if(!empty($i_uname) and !empty($i_pwd))
        {
            include_once("./database.php");
            $link= mysqli_connect($hostname,$username,$password,$databasename);
            $qry= "select * from user_data where uname='$i_uname' and upass='$i_pwd'";
            $resultset= mysqli_query($link,$qry);
            $data= mysqli_fetch_assoc($resultset);

            $num_rows=mysqli_num_rows($resultset);
            if ($num_rows)
            {
                extract($data);
                session_start();
                $_SESSION["user_name"]=$uname;
                $_SESSION["user_pwd"]=$upass;
                header("location:decor.php");
            }
            else
            {
                echo "authentiation failed.....";
            }
        }
        else
        {
            echo "Fields can't be empty....";
        }
    }
    ?>

  
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>