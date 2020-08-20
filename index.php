<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar using JQuery</title>
    <link rel="stylesheet" href="index.css">
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

    <!-----auto refresh scripts ---->

    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>



<script>

 $(document).ready(function(){

     $("#message").load('load.php');
   setInterval(function(){
      $("#message").load('load.php');
   }, 1000);
      });

</script>
    <!-------------------------->
     <script>

$(document).ready(function(){

     $("#message").animate({
        scrollTop: $('#message').get(0).scrollHeight
            },1000);
     });
</script> 

  </head>
  <body>
    <nav>
      <label class="logo">  </label>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">file</a></li>
        <li><a href="login.html">login</a></li>
        <li><a class="active"  href="sing_in.php">sing in</a></li>
        
      </ul>
      <label id="icon"><i class="fas fa-bars"></i></label>
    </nav>
    <section>
     <div class="flex-box">
       <div class="content">

        <div class="head">
          <label style="display:flex;align-items:center;margin:7px 10px;height:100%;"> 

            <img style="width:43px;" src="icon/user.svg"> 

          </label>
          <!--php code here===--->

         

          <?php session_start();

         if(isset($_SESSION['user_name'])){

        echo 'Welcome '.$_SESSION['user_name'];
             echo '&nbsp;<a style="color:#fff;" href="logout.php">Logout</a>';
           } else{   

       header("location:login.php");
}
               
            ?> 

         
          
        </div> 

        <form method="post">

        
         <div id="message">
         
      
          <!---php code here---->
         

<?php include ("connection.php");

if(isset($_POST['send'])){

$message=$_POST['message'];

$mess= "insert into message(message,user_name) values('".$message."','".$_SESSION['user_name']."')";

if(mysqli_query($conn,$mess)){

echo '<h4 style="color:red;">'.$_SESSION['user_name'].'</h4>';
echo '<p>'.$message.'</p>';


}

}

?> 
           
         </div>
             <div class="btn">
            <input type="text" placeholder="Write your message here." name="message">
            &nbsp;&nbsp;

           <input type="submit" name="send" value="Send">

         </div>   

         </form>
       </div>


     </div>
     <footer style="margin: -10px auto;">
       <center> <p style="color:#696969;">© Incogonito 2020-21</p> </center>
     </footer>
     
    </section>
  </body>
</html>
