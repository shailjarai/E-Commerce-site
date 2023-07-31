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
  </head>
  <body>
  <form method="post">
        <table border="2px" align="center">
            <!-- <tr>
                <td>Enter ROLL NO.</td><td><input type="number" name="i_roll"></td>
            </tr> -->
            <tr>    <td>Enter NAME</td><td><input type="text" name="i_snm"></td> </tr>
            <tr>    <td>Enter price</td><td><input type="text" name="i_price"></td></tr>
            <tr>    <td>Enter discount</td><td><input type="text" name="i_dis"></td></tr>
            <tr>  <td>final price</td><td><textarea name="i_final"></textarea></td> </tr>
            <tr><td colspsn="2" align="center"><input type='submit' name='subbtn' value='insert record'></td></tr>
           
        </table>
        <?php
            extract($_POST);
            if(isset($subbtn))
            {
                include_once("./database.php");
               $link= mysqli_connect($hostname,$username,$password,$databasename);
            //    $qry="insert into stu_data(rollnum,stu_name,stu_email,stu_password,stu_address) values($i_roll,'$i_snm','$i_mail_id','$i_pwd','$i_addr')";
            $qry="insert into cart(pro_name,price,discount,finalprice) values('$i_snm','$i_price','$i_dis','$i_final')";
               $r= mysqli_query($link,$qry);
               if($r==1)
               {
                header("location:uploadpho.php");
               }
               else
               {
                echo "insertion failed";
               }
               mysqli_close($link);
             
            }
        ?>

    </form>
    <?php include_once('./footer.php'); ?>