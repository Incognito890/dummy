<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar using JQuery</title>
    <link rel="stylesheet" href="sing_in.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
      $(document).ready(function(){
        $('#icon').click(function(){
          $('ul').toggleClass('active');
        });
      });
    </script>

  </head>
  <body>
    <nav>
      <label class="logo"></label>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">file</a></li>
        <li><a href="login.html">login</a></li>
        <li><a class="active"  href="#">sing in</a></li>
        
      </ul>
      <label id="icon"><i class="fas fa-bars"></i></label>
    </nav>
    <section>
      <div class="flex-box">
        <div class="content">

          <label class="new-logo"> <img src="icon/das.svg"> <p>User configration <b>das-bord</b></p> </label>
          <form method="post">

            
            <p>Please enter your details for your regenation<a style="color:#00bfff;" href="">Terms & privcy</a></p><br>

 <!----------------------php program is here--------------------------------------------------->
  
<?php

  require_once("connection.php");

  if(isset ($_POST['register'])){

  $Full_name=$_POST['first-name'];
  $Phone_number=$_POST['Phone-no'];
  $User_name=$_POST['user-name'];
  $Password=$_POST['password'];


//-------------------Filter--------------------------------------------

$Full_name=mysqli_real_escape_string($conn,$Full_name);

$Phone_number=mysqli_real_escape_string($conn,$Phone_number);

$User_name=mysqli_real_escape_string($conn,$User_name);

$Password=mysqli_real_escape_string($conn,$Password);




//------------------------------------------------------------------------

 if($Full_name !="" and $Phone_number !="" and $User_name !="" and $Password !=""){

  $sql= "insert into usr(full_name,phone_no,user_name,password) values('".$Full_name."','".$Phone_number."','".$User_name."','".$Password."')";

 $res=mysqli_query($conn,$sql);

  if($res){
  echo '<p style="color:green;">Sucessfully sing in</p>';
       header("location:login.php");
  }
  else{
    echo '<p style="color:red;">Something went worang</p>';
}

}// this is 7 up exit
else{
echo '<p style="color:orange;">Please fill the boxes</p>';
}

}
?>
             

            <!----form- is started now --->

           
            
            <input type="text" placeholder="Enter name without space" name="first-name"><br><br>
          
            <input type="text" placeholder="Enter phone number" name="Phone-no"><br><br>

            <input type="text" placeholder="Enter user name" name="user-name"><br><br>

            <input type="password" placeholder="Enter password" name="password"><br><br>

            <input type="submit" value="submit" name="register"><br><br><br>


          </form>
        </div>
      </div>
      
     
    </section>
  </body>
</html>
