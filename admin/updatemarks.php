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
    <title>Update Marks</title>
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
          <h2>Update marks</h2>
        <form method="post" action="">
        <?php
 
    include('../config.php');
    $ids=$_GET['id'];
    $sql="SELECT * FROM `marks` WHERE `rollno`='$ids'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
   
?>


<table class="table1">
         <!-- <tr>
                 <th> Course:
                 <select name='course' value="<?php  echo $data['course']; ?>">  
                        <option value="Course">Course</option>  
                        <option value="BCA">BCA</option>  
                          
                </select> 
            </th>
            </tr>
            <tr>
                 <th> Semester:
                 <select name='semester' value="<?php  echo $data['semester']; ?>">  
                        <option value="Semester">Semester</option>  
                        <option value="sem1">1st Semester</option>  
                </select> 
            </th> 
             </tr>-->
             <tr>
             <th>Rollno</th><th>Maths <h6>(Total marks 100)</h6></th> <th> Digital Design <h6>(Total marks 100)</h6></th> 
             </tr>
             <tr>
             
                 <td><input type='text' name='rollno' placeholder='Rollno' value="<?php  echo $data['rollno']; ?>" required class="box"/></td>
                 <td><input type='text' name='maths' placeholder='Maths' value="<?php  echo $data['maths']; ?>" required class="box"/></td>
                 <td><input type='text' name='dd' placeholder='Digital design' value="<?php  echo $data['dd']; ?>" required class="box"/></td>                
             </tr>
             <tr>
             <th>Operating System <h6>(Total marks 100)</h6></th><th>DBMS <h6>(Total marks 100)</h6></th> <th>Lab <h6>(Total marks 100)</h6></th>   
             </tr>
                 <tr>
                 <td><input type='text' name='os' placeholder='Operating System' value="<?php  echo $data['os']; ?>" required class="box"/></td>
                 <td><input type='text' name='dbms' placeholder='DBMS' value="<?php  echo $data['dbms']; ?>" required class="box"/></td>
                 <td><input type='text' name='lab' placeholder='Lab' value="<?php  echo $data['lab']; ?>" required class="box"/></td>
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
    
   
    $rollno=$_POST['rollno'];
    $maths=$_POST['maths'];
    $dd=$_POST['dd'];
    $os=$_POST['os'];
    $dbms=$_POST['dbms'];
    $lab=$_POST['lab'];
  

   
    
    $sql2=" UPDATE `marks` set `rollno`=$rollno,`maths`='$maths',`dd`='$dd',`os`='$os',`dbms`='$dbms',`lab`='$lab' WHERE `rollno`='$ids'";
    $run2=mysqli_query($conn,$sql2);
    if($run2)
    {
        ?>
        <script>
        alert('Marks updated successfully');
        window.open('allmarks.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('The student rollno already exist');
        window.open('allmarks.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php 
    }
}

?>
