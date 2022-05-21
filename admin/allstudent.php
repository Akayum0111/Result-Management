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
    <title>All Student Detail</title>
<link rel="stylesheet" href="../css/allstudent.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="logout.php"><b>LOGOUT</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h2>Students Record</h2>
        <form>
         <table>
          <tr>
           <th class="id_h1">Rollno </th>
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Father's Name </th> 
           <th class="contact_h1">Course</th>
           <th class="contact_h1">Semester</th>
           <th class="contact_h1">Address</th>
           <th class="contact_h1">Mob_No</th>
           <th class="contact_h1">Email</th>
           <th class="contact_h1">Update</th>
           <th class="contact_h1">Delete</th>

         </tr>
        
<?php
include('../config.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($conn,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['rollno']; ?></th>
            <th class="name_h"> <?php  echo $row['name']; ?></th> 
            <th class="email_h"> <?php  echo $row['fname']; ?></th> 
            <th class="contact_h"> <?php  echo $row['course']; ?></th> 
            <th class="contact_h"> <?php  echo $row['semester']; ?></th> 
            <th class="contact_h"> <?php  echo $row['address']; ?></th> 
            <th class="contact_h"> <?php  echo $row['mobno']; ?></th> 
            <th class="contact_h"> <?php  echo $row['email']; ?></th> 
            <th class="contact_h"><a href="updatedata.php?id=<?php  echo $row['rollno'];?>">Update</a></th>
            <th class="contact_h"><a href="deletedata.php?ids=<?php  echo $row['rollno'];?>">Delete</a></th>
           
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>
