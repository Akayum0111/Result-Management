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
        <form method="post" action="addmarks.php">
        <table class="table2">
                 <tr>
                 <th> Course:
                 <select name="course" id="course">  
                        <option value="course">Course</option>  
                        <option value="bca">BCA</option>  
                          
                </select> 
            </th>
           
                 <th> Semester:
                 <select name="semester" id="semester">  
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
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='fname' placeholder="Father's Name" required class="box"/></td>
                 </tr>

             <tr>
                <th>Address</th>   <th>Mob_No</th> <th>Email</th>
             </tr>
             <tr>
                 <td><input type='text' name='address' placeholder='Enter Address' required class="box"/></td>
                 <td><input type='text' name='mobno' placeholder='Enter Mobile Number' required class="box"/></td>
                 <td><input type='text' name='email' placeholder="Enter Email" required class="box"/></td>
                 
                 
                
             </tr>
             </table>
             
        
         <table class="table4">
            <tr>
           <td align ="center" colspan="2"><input type="submit" name="submit" value="Submit" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
