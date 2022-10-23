<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donor List</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="test/css">
        td{
            width:200px;
            height:40px;
        }
        </style>
</head>
<body>

   <div id="full">
   
       <div id="inner_full">
           <div id="header" align="center">
               <h2> <a href="admin-home.php" style="text-decoration: none; color: white;"> Donate Blood Save Life </a> </h2>
               <h4> A Blood Bank Management System </h4>
           </div>
           <div id="body">
               <br>
               <?php
               $un=$_SESSION['un'];
               if(!$un)
               {
                   header("Location:index.php");
               }
               ?>
           
               <h1 text align='center'> Stock Blood List</h1><br>
              <center> <div id="form">
                  <table>
                      <tr>
                          <td><center><font color="white"><b>Blood Group</b></font></center></td>
                     
                          <td><center><font color="white"><b>Quantity</font></b></center></td>
                          
                        </tr>
                        
                    
                        <tr>
                        <td><center>O+</center></td>
                     
                        <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='o+'");
                         echo $row=$q->rowcount();
                          ?>
                        </center> </td>
                        </tr>   
                        <tr>
                          <td><center>O-</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='o-'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                        <tr>
                          <td><center>AB+</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='ab+'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                        <tr>
                          <td><center>AB-</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='ab-'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                        <tr>
                          <td><center>A+</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='a+'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                        <tr>
                          <td><center>A-</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='a-'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                        <tr>
                          <td><center>B+</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='b+'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>   
                        <tr>
                          <td><center>B-</center></td>
                     
                          <td> <center>

                          <?php
                          $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='b-'");
                         echo $row=$q->rowcount();
                          ?>
                        </tr>  
                  </table>

                  
           
            
             </div> </center>
           <br><br><br>
           <div id="footer"> 

           <p align="center"><a href="logout.php"><font color="black" size="5" style="width: 70px;height: 30px; border-radius: 5px;">Log Out</a> </p>
                        
            </div>

        </div>
    </div>
    

</body>
</html>