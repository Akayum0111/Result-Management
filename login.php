<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:login.php');	
}
?>
<html>
<head>
    <title>Login  here</title>

    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">HOME</a></li>
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT</a></li>
                
            </ul>
        </div>
      </nav>
      <div class="login-content-header">
          <form action="" method="POST">
           <h1 class="login_heading">Admin Login</h1>
           <table class="form1">
            <tr>
            <th>Username </th>
            <td class="table"><input type="text" name="username" placeholder="Enter Username" class="field1"/></td>  
            </tr> 
            <tr >
            <th>Password </th>
            <td class="table"><input type="password" name="password" placeholder="Enter Password" class="field1"/></td>
            </tr>   
            <tr>
            <td align ="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
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
    include('config.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="select * from admin where username ='$username' && password ='$password'";
    $run=mysqli_query($conn,$qry) or die("query failled".mysqli_error($conn));
    $row=mysqli_num_rows($run);
    if($row>0)
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.location.href='login.php';
        </script>
       <?php
    }
}
?>
