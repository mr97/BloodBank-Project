<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>

   <div id="full">
   
       <div id="inner_full">
           <div id="header" align="center">
               <h2> <a href="admin-home.php" style="text-decoration: none; color: white"> Donate Blood Save Life </a> </h2>
               <h4> A Blood Bank Management System </h4>
           </div>
           <div id="body" align='center'>
               <br>
               <?php
               $un=$_SESSION['un'];
               if(!$un)
               {
                   header("Location:index.php");
               }
               ?>
           
               <h1 text align='center'> Welcome Admin </h1><br>
               <ul align='center'>
                   <li><a href="donor-reg.php">Donor Registration</a></li>
                   <li><a href="donor-list.php">Donor List</a></li>
                   <li><a href="stock-blood.php">Stock Blood</a></li>
            </ul>
            <br><br><br><br>
            <ul>
                   <li><a href="stock-out.php">Stock Out Blood Groups</a></li>
                   
                   <li><a href="exchng-blood.php">Exchange Blood</a></li>
                   <li><a href="eb-list.php">E.Blood List</a></li>
             </ul>
          
           </div>
           <div id="footer"> 

           <p align="center"><a href="logout.php"><font color="black" size="5" style="width: 70px;height: 30px; border-radius: 5px;">Log Out</a> </p>
                        
         </div>

       </div>
   </div>
    
</body>
</html>