





 <?php
include ('connection.php');
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
   <div id="full">
       <div id="inner_full">
           <div id="header" align="center">
               <h2> Donate Blood Save Life </h2>
               <h4> A Blood Bank Management System </h4>
           </div>
           <div id="body">
           <br><br><br><br><br>
           <form action="" method="post">
             <table align="center">
               <tr>
                   <td width="200px" height="50px"><b>Enter Username : </b></td>
                   <td width="100px" height="70px"> <input type="text" name="un" placeholder="Enter Username" style="width: 200px;height: 30px; border-radius: 5px;"></td>
                </tr>
                       <tr>
                   <td width="200px" height="50px"><b>Enter Password : </b></td>
                   <td width="100px" height="100px"> <input type="text" name="ps" placeholder="Enter Password"style="width: 200px;height: 30px; border-radius: 5px;"></td>
                        </tr> 
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="sub" value="Login" style="width: 70px;height: 30px; border-radius: 5px;"> </td>
                </tr>
              </table>
            </form>
            <?php 
                if(isset($_POST['sub'])){
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $q=$db -> prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps' ");
                    $q -> execute ();
                    $res=$q->fetchAll(PDO::FETCH_OBJ);
                    if($res)
                    {
                      $_SESSION['un']=$un;
                       header("Location: admin-home.php");
                    }
                    else
                    {
                        echo "<script> alert ('Admin Access Denied') </script>";
                    }
                }
                ?>
           </div>
           <div id="footer"> <h3 align="center" > For Any Query, Please Contact <h3> 
                        <h5 align="center">Md Mahabubur Rahman</h5> 
                        <h5 align="center">E-mail:rmahabub49@gmail.com , Contact No: 01686527984 </h5>
         </div>

       </div>
   </div>
    
</body>
</html>