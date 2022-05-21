<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
       <h3><a href="addstudent.php">-> Add Student Details </a></h3>
       <h3><a href="allstudent.php">-> Data of all Students </a></h3>
       <h3><a href="allmarks.php">-> All Students marks</a></h3>
       <h3><a href="usermessage.php">-> Messages by Student</a></h3>
       
      </div>
    </header>
    
</body>
</html>
