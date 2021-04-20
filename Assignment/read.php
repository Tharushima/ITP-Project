<?php include "php/read.php";   ?>
<!DOCTYPE html>
<html>
<head>
<title> Delivery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet"  href="css/style.css">

</header>
<body>

<div class ="container">
        <div class ="box">
        <?php  if(isset($_GET['success'])){?>

<div class="alert alert-success" role="alert">
<?php echo $_GET['success'];?>
</div>
<?php }?>
  <?php if(mysqli_num_rows($result))  { ?>

    <div class="form-group">
    <label for="item">Search</label>
    <a href ="search.php?id=<?=$rows['id']?>"
       class="btn btn-information">
    <input type="text" class="form-control" id="search" name="search">

    </a>
    <a href ="search.php?id=<?=$rows['id']?>"
       class="btn btn-primary">Search</a>
    </div>
   
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Delivery ID</th>
      <th scope="col">Client ID</th>
      <th scope="col">Address</th>
      <th scope="col">Delivery Item</th>
      <th scope="col">Phone number</th>
      <th scope="col">Delivery Charge(LKR.)</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $i=0;
      while($rows = mysqli_fetch_assoc($result)){
      $i++;
      ?>
    
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['clientid']?></td>
      <td><?php echo $rows['addresses'];?></td>
      <td><?php echo $rows['delitem'];?></td>
      <td><?php echo $rows['phone'];?></td>
      <td>LKR.<?php echo $rows['delichar'];?></td>
      <td><a href ="update.php?id=<?=$rows['id']?>"
       class="btn btn-success">Update</a></td>
       <td><a href ="delete.php?id=<?=$rows['id']?>"
       class="btn btn-danger">Delete</a>
       </td>

    </tr>
  
  
    <?php   }?>
  </tbody>
</table>
<?php   }?>

<div class="link-right">
        <a href="index.php"  class="link-primary">back</a>
      </div>
        </div>
 </div>
 </body>
 </html>