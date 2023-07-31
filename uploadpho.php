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
  <section class='mt-3'>
<div class='container'>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div align='center'>
            <input type='submit' name='showbtn' value='display all data'>
        </div>
        <?php
            extract($_POST);
            if(isset($showbtn))
            {
                include_once("./database.php");
                $link= mysqli_connect($hostname,$username,$password,$databasename);
                $qry= "select * from cart";
                $resultset= mysqli_query($link,$qry);

                // while($row = mysqli_fetch_row($resultset))
                // {
                //     echo $row[0]," ",$row[1],"<br >";
                // }

                $table=<<<TAB
                <table class='table table-bordered table-striped mt-3'>
                <thead class='table-danger'>
                    <tr>
                        <th> Number</th>
                        <th>product Name</th>
                        <th>price</th>
                        <th>discount</th>
                        <th>final price</th>
                        <th>Upload image</th>
                    </tr>
                </thead>
                <tbody>
                TAB;    
                while($row = mysqli_fetch_assoc($resultset))
                {
                    $r= "<tr><td>$row[rollnum]</td><td>$row[pro_name]</td>
                    <td>$row[price]</td><td>$row[discount]</td><td>$row[finalprice]</td>
                    <td><a href='uploadimg.php?id=$row[rollnum]' class='btn btn-dark'>UPLOAD</a></td></tr>";
                    $table= $table. $r;
                }
                $table= $table."</tbody></table>";
                echo $table;

                // while($row = mysqli_fetch_array($resultset))
                // {
                //     echo $row[0]," ",$row['stu_name'],"<br >";
                // }

                mysqli_close($link);
                
            }
        ?>
    </form>
</div>
</secion>

<?php include_once("./footer.php"); ?>