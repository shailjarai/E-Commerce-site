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
  <?php
include_once("./database.php");
$link= mysqli_connect($hostname,$username,$password,$databasename);
$qry= "select rollnum,pro_name from cart where rollnum=$_GET[id]";
$resultset= mysqli_query($link,$qry);
$row= mysqli_fetch_assoc($resultset);
extract($row);

?>


<section>
<form method='post' enctype="multipart/form-data">
<table class='table table-bordered table-info mt-3' style='width:500px;' align='center'>
    <tbody>
        <tr><td>roll num</td><td><input type='text' name='i_rollnum' value=<?php echo $rollnum; ?> ></td></tr>
        <tr><td>Name</td><td><input type='text' name='i_name' value=<?php echo $pro_name; ?>></td></tr>
        <tr><td>upload file</td><td><input type='file' name='file_ctrl'></td></tr>
        <tr><td colspan='2' align='center'><input type='submit' name='uploadbtn' value='upload'></td>
    </tbody>
</table>
</form>
</section>
<?php
function uploadfun()
{
    $file_arr= ($_FILES['file_ctrl']);
                if($file_arr['error']==0)
                {
                    $exts= array("jpg","jpeg","png","gif");
                    $nm= $file_arr["name"];
                    $arr=explode(".",$nm);
                    $ext=end($arr);
                    $imgpath=null;
                    if(in_array($ext,$exts))
                    {
                        $tmp= $file_arr["tmp_name"];
                        $finalpath= $_SERVER['DOCUMENT_ROOT']."/mproject/upload_data/".$file_arr["name"];
                        move_uploaded_file($tmp,$finalpath);
                        $imgpath="./upload_data/".$file_arr["name"];
                        return $imgpath;
                        echo "file upload sucessfully......";
                    }
                    else
                    {
                        echo "file type invalid.......";
                    }
                }
                else
                {
                    echo "file uploading failed......";
                }
}
extract($_POST);
if(isset($uploadbtn))
{
    $imgpath= uploadfun();
    $qry= "update cart set pro_photo='$imgpath'where rollnum=$i_rollnum";
    $r= mysqli_query($link,$qry);
    if($r);
    header("location:uploadpro.php");
}
?>
<?php include_once('./footer.php'); ?>