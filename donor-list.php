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
           
               <h1 text align='center'> Donor Registration</h1><br>
              <center> <div id="form">
                  <table>
                      <tr>
                          <td><center><font color="white"><b>Name</b></font></center></td>
                          <td><center><font color="white"><b>Father's Name</font></b></center></td>
                          <td><center><font color="white"><b>Address</b></font></center></td>
                          <td><center><font color="white"><b>Area</b></font></center></td>
                          <td><center><font color="white"><b>Age</b></font></center></td>
                          <td><center><font color="white"><b>Blood Group</b></font></center></td>
                          <td><center><font color="white"><b>Mobile Number:</b></font></center></td>
                          <td><center><font color="white"><b>E-mail</b></font></center></td>
                     </tr>
                     <?php
                        $q=$db-> query("SELECT * FROM donor_registration");
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                             ?>
                                    <tr>
                          <td><center><b><?=$r1->name;?></b></center></td>
                          <td><center><b><b><?=$r1->fname;?></b></center></td>
                          <td><center><b><b><?=$r1->address;?></b></center></td>
                          <td><center><b><b><?=$r1->area;?></b></center></td>
                          <td><center><b><b><?=$r1->age;?></b></center></td>
                          <td><center><b><b><?=$r1->bgroup;?></b></center></td>
                          <td><center><b><b><?=$r1->email;?></b></center></td>
                          <td><center><b><b><?=$r1->mn;?></b></center></td>

                     </tr>
                            <?php 

                        }
                       
                        ?>
                     
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