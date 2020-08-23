<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <table align="center" style="margin_top:100px;">
              <tr>
                <td>Name :</td><td><input type="text" name="name" required="required"</td>
              </tr>
              <tr>
                <td>Email id : :</td><td><input type="emai" name="email" required="required"</td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"/></td>
              </tr>

      </table>

    </form>
  </body>
</html>

<?php
$name =$_POST['name'];  //collect the data in the feild by post method on submit click
$email =$_POST['email'];  //collect the data in the feild by post method on submit click

$con = mysqli_connect('localhost','root','','insertdb');  //connection method assign in $con variable
$query = "INSERT INTO `userdata`( `Name`, `email`) VALUES ('$name','$email')"; //assign query to the $query variable

$run = mysqli_query($con,$query); //run with connection method and query it will insert data in database

if ($run == TRUE)   //to chk if successfull
 {
echo "Data inserted Successfully";
}
else {
  echo "Error";
}

 ?>
