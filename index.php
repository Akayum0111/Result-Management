<html>
<head>
    <title>Student Result Management System</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">HOME</a></li>
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT</a></li>
                <li><a href="login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <br>
              <h2 class="search">Search your RESULT!</h2>
              <br><br>
        
            <tr>
                <th class="standered1">Rollno</th>
                <td class="standered2"><input type="text" name="rollno" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    
    
</body>
</html>
