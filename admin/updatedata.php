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
    <title>Add Student</title>
<link rel="stylesheet" href="../css/addstudent.css" type="text/css">
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
          <h2>Enter the Details of Student</h2>
        <form method="post" action="">
        <?php
 
    include('../config.php');
    $ids=$_GET['id'];
    $sql="SELECT * FROM `student_data` WHERE `rollno`='$ids'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
   
?>


        <table class="table2">
                 <tr>
                 <th> Course:
                 <select name="course" id="course" value="<?php  echo $data['course']; ?>">  
                        <option value="course">Course</option>  
                        <option value="bca">BCA</option>  
                          
                </select> 
            </th>
           
                 <th> Semester:
                 <select name="semester" id="semester" value="<?php  echo $data['semester']; ?>">  
                        <option value="semester">Semester</option>  
                        <option value="sem1">1st Semester</option>  
                </select> 
            </th> 
             </tr>
             
         </table>
            <table class="table1">
             <tr>
                <th>Rollno</th>   <th>Name</th> <th>Father's Name</th>
             </tr>
             <tr>
                 <td><input type='text' name='rollno' placeholder='Rollno' value="<?php  echo $data['rollno']; ?>" required class="box"/></td>
                 <td><input type='text' name='name' placeholder='Name' value="<?php  echo $data['name']; ?>" required class="box"/></td>
                 <td><input type='text' name='fname' placeholder="Father's Name" value="<?php  echo $data['fname']; ?>" required class="box"/></td>
                 </tr>
                 <tr>
                <th>Address</th>   <th>Mob_No</th> <th>Email</th>
             </tr>
             <tr>
                 <td><input type='text' name='address' placeholder='Address' value="<?php  echo $data['address']; ?>" required class="box"/></td>
                 <td><input type='text' name='mobno' placeholder='Mob_No' value="<?php  echo $data['mobno']; ?>" required class="box"/></td>
                 <td><input type='text' name='email' placeholder="Email" value="<?php  echo $data['email']; ?>" required class="box"/></td>
                 </tr>
             </table>
             
        
         <table class="table4">
            <tr>
           <td align ="center" colspan="2"><input type="submit" name="submit" value="Update" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
<?php

include('../config.php');
if(isset($_POST['submit']))
{ 
    
   
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $address=$_POST['address'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
  

   
    
    $sql2="UPDATE `student_data` set `rollno`='$rollno',`name`='$name',`fname`='$fname',`course`='$course',`semester`='$semester',`address`='$address',`mobno`='$mobno',`email`='$email' WHERE `rollno`='$ids'";
    $run=mysqli_query($conn,$sql2);
    if($run)
    {
        ?>
        <script>
        alert('Student data updated successfully');
        window.open('allstudent.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('The student rollno already exist');
        window.open('allstudent.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php 
    }
}

?>
