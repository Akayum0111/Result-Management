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
<?php

include('../config.php');
if(isset($_POST['submit']))
{ 
    

    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $rollno=$_POST['rollno'];
    $username=$_POST['name'];
    $fname=$_POST['fname'];
    $address=$_POST['address'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
  

   
    
    $sql="INSERT INTO student_data VALUES ('$rollno','$username','$fname','$course','$semester','$address','$mobno','$email')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Student data inserted successfully');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('The student rollno already exist');
        window.open('addstudent.php', '_self');
        </script>
        <?php 
    }
}

?>

<html>
<head>
    <title>Add Student Marks</title>
<link rel="stylesheet" href="../css/addmarks.css" type="text/css">
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
          
          <form method="post" action="addmarks2.php">
              <h5>Add marks Details</h5>
          
              
              
          <table class="table1">
          
             <tr>
             <th>Rollno</th><th>Maths <h6>(Total marks 100)</h6></th> <th> Digital Design <h6>(Total marks 100)</h6></th> 
             </tr>
             <tr>
             
                 <td><input type='text' name="rollno" value="<?php  echo $_POST['rollno'];?>" required class="box"/></td>
                 <td><input type='text' name='maths' placeholder='Maths' required class="box"/></td>
                 <td><input type='text' name='dd' placeholder='Digital design' required class="box"/></td>                
             </tr>
             <tr>
             <th>Operating System <h6>(Total marks 100)</h6></th><th>DBMS <h6>(Total marks 100)</h6></th> <th>Lab <h6>(Total marks 100)</h6></th>   
             </tr>
                 <tr>
                 <td><input type='text' name='os' placeholder='Operating System' required class="box"/></td>
                 <td><input type='text' name='dbms' placeholder='DBMS' required class="box"/></td>
                 <td><input type='text' name='lab' placeholder='Lab' required class="box"/></td>
            </tr>

            </table>
             <table class="table4">
            <tr>
           <td align ="center" colspan="2"><input type="submit" name="submit" value="Submit" class="smt"/></td>  
           </tr>
        </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>
