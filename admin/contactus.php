<html>
<head>
    <title>Contact</title>
<link rel="stylesheet" href="../css/contactus.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
                <li><a href="../login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="">
          <table class="table">
              <h3 class="search">Send Us a Message</h3>
              <tr>
                <th class="tblheading">Enter Your Name</th>
              </tr>
              <tr>
              <td><input type="text" class="tbldata" name="name" placeholder="Full Name" Required/></td>
              </tr>
              <tr>
                <th class="tblheading">Enter Your Roll No</th>
              </tr>
              <tr>
              <td><input type="number" class="tbldata" name="rollno" placeholder="Enter Your Rollno"/></td>
              </tr>
              <tr>
                <th class="tblheading">Enter your Email Id</th>
              </tr>
              <tr>
                <td class="tbldata"><input type="text" class="tbldata" name="email" placeholder="Email Id" Required/></td>
              </tr>
              <tr>
                <th class="tblheading">Enter your Contact No.</th>
              </tr>
              <tr>
                <td class="tbldata"><input type="text" class="tbldata" name="cont" placeholder="Contact No" Required/></td>
              </tr>
              <tr>
                <th class="tblheading">Type your Message</th>
              </tr>
              <tr>
                <td><input type="text" class="tbldata1" name="message" placeholder="Type here..."/></td>
              </tr>
              <tr>
              <td colspan="2" align ="center"><input type="submit" name="submit" value="SEND" class="submit"/></td>
              </tr>
          </table>
       </form>
      </div>
</header>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../config.php');
    $rollno=$_POST['rollno'];
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $message=$_POST['message'];
    $sql="INSERT INTO `user_messase`(`rollno`, `name`, `email`, `phone`, `message`) VALUES ('$rollno','$username','$email','$contact','$message')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Message is sent to Admin');

     </script>
   <?php
    }
    else{
      ?>
    <script>
    alert('Query failed');

   </script>
 <?php
  }
}

?>
