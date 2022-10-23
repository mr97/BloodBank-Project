<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exchange Blood</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        #form1{
    width:80%;
    height: 320px;
    background-color: rgb(29, 29, 26);
    color: white;
    border-radius: 10px;
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
           
               <h1 text align='center'> Exchange Blood </h1><br>
              <center> <div id="form1">
                  <form action="" method="Post">
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name: </td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter name"></td>
                        <td width="200px" height="50px">Enter Father's Name: </td>
                        <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
            </tr>
            <tr>
                        <td width="200px" height="50px">Enter Address: </td>
                        <td width="200px" height="50px"><textarea name="address"></textarea></td>
                        <td width="200px" height="50px">Enter Area: </td>
                        <td width="200px" height="50px">

                        <select name="area">
                            <option>NSTU</option>
                            <option>Sonapur</option>
                            <option>Dotter Haat</option>
                            <option>Bisshonath</option>
                            <option>Maijdee</option>
                            <option>Gabua</option>
                            <option>Chowrasta</option>
                            <option>Others</option>
                        </select>

                        </td>
            </tr>
            <tr>
                        <td width="200px" height="50px">Enter Age: </td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
                        <td width="200px" height="50px">Enter Your Mail: </td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
                        
            </tr>
            <tr>
                       
                        <td width="200px" height="50px">Enter Mobile Number: </td>
                        <td width="200px" height="50px"><input type="text" name="mn" placeholder="Enter Mobile Number"></td>
            </tr>
            <tr>
            <td width="200px" height="50px">You are Taking</td>
                        <td width="200px" height="50px">

                        <select name="bgroup">
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                        </select>

                        </td>
                        <td width="200px" height="50px">Exchange Blood Group</td>
                        <td width="200px" height="50px">

                        <select name="exbgroup">
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                        </select>

                        </td>
            <tr>
            <td><input type="submit" name="sub" value="Save"></td>
            </tr> 

            </table>
            </form>
           
            <?php

                if(isset($_POST['sub']))
                {
                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    $address=$_POST['address'];
                    $area=$_POST['area'];
                    $age=$_POST['age'];
                    $bgroup=$_POST['bgroup'];
                    $email=$_POST['email'];
                    $mn=$_POST['mn'];
                    $exbgroup=$_POST['exbgroup'];


                    $q="select * from donor_registration where bgroup ='$bgroup'";
                      $st=$db->query($q);
                      $num_row=$st->fetch();
                       $id=$num_row['id'];
                       $name=$num_row['name'];
                       $b1=$num_row['bgroup'];
                       $mn=$num_row['mn'];
                       $q1="INSERT INTO out_stock_blood (bname,name,mn) value (?,?,?)";
                       $st1=$db->prepare($q1);
                       $st1->execute([$b1,$name,$mn]);

                       $q2="DELETE FROM donor_registration WHERE id='$id'";
                       $st1=$db ->prepare($q2);
                
                       $st1 ->execute();    

                    $q=$db-> prepare("INSERT INTO exchange_b (name,fname,address,area,age,bgroup,email,mn,ebgroup)VALUES(:name,:fname,:address,:area,:age,:bgroup,:email,:mn,:ebgroup)");
                    $q->bindvalue('name',$name);
                    $q->bindvalue('fname',$fname);
                    $q->bindvalue('address',$address);
                    $q->bindvalue('area',$area);
                    $q->bindvalue('age',$age);
                    $q->bindvalue('bgroup',$bgroup);
                    $q->bindvalue('email',$email);
                    $q->bindvalue('mn',$mn);
                    $q->bindvalue('ebgroup',$exbgroup);
                    if($q ->execute())
                    {
                      echo  "<script> alert(' Registration Successfull')</script>"; 
                    }
                
        
                else
                    {
                        echo  "<script> alert(' Registration Failed')</script>"; 
            
                    }
                }
                
            ?>
             </div> </center>
           <br><br><br>
           <div id="footer"> 

           <p align="center"><a href="logout.php"><font color="black" size="5" style="width: 70px;height: 30px; border-radius: 5px;">Log Out</a> </p>
                        
            </div>

        </div>
    </div>
    

</body>
</html>