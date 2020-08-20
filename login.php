<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar using JQuery</title>
    <link rel="stylesheet" href="style.css">
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
        <li><a class="active" href="#">login</a></li>
        <li><a href="sing_in.php">sing in</a></li>
        
      </ul>
      <label id="icon"><i class="fas fa-bars"></i></label>
    </nav>
    <section>
      
      <div class="flex-box">
        <div class="content">
               <label class="usr_logo"> <img src="icon/usr.svg"> </label>
        <!------------php code here------------------------------>

     <?php session_start();

     require_once("connection.php");

    if(isset ($_POST['login'])){

     $user_name=$_POST['user_name'];
     $password=$_POST['password'];
   
   //To filter input//

     $user_name=mysqli_real_escape_string($conn,$user_name);

     $password=mysqli_real_escape_string($conn,$password);


  //select or check user and password in data base 

   $q='SELECT * FROM `usr` where `user_name`="'.$user_name.'"  and `password`="'.$password.'"';
    $r = mysqli_query($conn,$q);



    if(mysqli_num_rows($r) > 0){

        echo '<p style="color:red;">You Sucessfully login</p>';

      //to create a session //

         $_SESSION['user_name'] = $user_name; 

        

       header("location:index.php");

        }

       else{
        echo '<p style="color:red;">Your user name and password do not match!</p>';
        }

     }
?>



          <!---------------------------------->

          <form method="post">

            <input type="text" name="user_name" placeholder="Enter user name"><br><br>
            <input type="password" name="password" placeholder="Enter password"><br><br>
            <input type="submit" name="login" value="Login here"><br><br>

            
          </form>
           <div class="footer">
             <p>© Incogonito</p>
           </div>

        </div>
      </div>
    </section>
  </body>
</html>
