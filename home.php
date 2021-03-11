<?php
include "connect.php";
$sql = "SELECT * FROM `user` ";
if ($result=mysqli_query($conn,$sql)) {
  // code...
  $row=mysqli_fetch_assoc($result);

}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <center>
     <!-- <a href="register.php">+User</a> -->
     <table border="1">
       <tr>
         <th colspan="500">Manage user</th>
       </tr>
       <tr>
         <td colspan="500"><a href="register.php">+User</a></td>
       </tr>
       <tr>
         <th>ID</th>
         <th>USER_ACCOUNT</th>
         <th>USER_NAME</th>
         <th>PASSWORD</th>
         <th>IMAGE</th>
         <th>Time_CREATE</th>
         <th>OPERATION</th>
       </tr>
       <?php
        if($result=mysqli_query($conn,$sql)){
          while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['user_account']; ?></td>
          <td><?php echo $row['user_name']; ?></td>
          <td><?php echo $row['pass']; ?></td>
          <td><?php echo $row['image']; ?></td>
          <td><?php echo $row['type']; ?></td>
          <td><?php echo $row['time_create']; ?></td>
        </tr>
        <?php
      }
    }
         ?>
     </table>
   </body>
 </html>
