<?php
include "connect.php";
$sql = "SELECT * FROM `book` ";
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
     <table border="1">
       <tr>
         <th colspan="500">Book Store</th>
       </tr>
       <!-- <tr>
         <td colspan="500"><a href="register.php">+User</a></td>
       </tr> -->
       <tr>
         <th>BookID</th>
         <th>BookName</th>
         <th>TypeId</th>
         <th>StatusID</th>
         <th>Publish</th>
         <th>UnitPrice</th>
         <th>UnitRent</th>
         <th>DayAmount</th>
         <th>Picture</th>
         <th>BookDate</th>
       </tr>
       <?php
        if($result=mysqli_query($conn,$sql)){
          while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
          <td><?php echo $row['book_id']; ?></td>
          <td><?php echo $row['book_name']; ?></td>
          <td><?php echo $row['type_id']; ?></td>
          <td><?php echo $row['status_id']; ?></td>
          <td><?php echo $row['publish']; ?></td>
          <td><?php echo $row['unit_price']; ?></td>
          <td><?php echo $row['unit_rent']; ?></td>
          <td><?php echo $row['day_amount']; ?></td>
          <td><?php echo $row['picture']; ?></td>
          <td><?php echo $row['book_date']; ?></td>
        </tr>
        <?php
      }
    }
         ?>
     </table>
   </body>
 </html>
