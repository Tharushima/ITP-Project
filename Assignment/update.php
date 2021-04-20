<?php include 'php/update.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title> Update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet"  href="css/style.css">

</header>
<body>

<div class ="container">
<form  action ="php/update.php" method="post">

<h4 class ="display-4 text-center">Update<h4><hr><hr>
<?php  if(isset($_GET['error'])){?>

<div class="alert alert-danger" role="alert">
<?php echo $_GET['error'];?>
</div>
<?php }?>
<div class="form-group">
    <label for="name">Client ID</label>
    <input type="text" class="form-control"name="clientid" value="<?= $row['clientid'] ?>" 
                                   id="name" >
    </div>


  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address"
    value="<?=$row['addresses']  ?>"  >
    </div>

    <div class="form-group">
    <label for="delivery">Delivery Item</label>
    <input type="text" class="form-control" id="delivery" name="delitem"
    value="<?=$row['delitem']  ?>">
    </div>
    <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="tel" class="form-control" id="phone" name= "phone"
    value="<?=$row['phone']  ?>" >
    </div>
  
    <div class="form-group">
    <label for="item">Delivey Charge(LKR.)</label>
    <input type="text" class="form-control" id="item" name="delichar"
    value="<?=$row['delichar'] ?>"  >
    </div>

    <br>
    <br>
    <input type="text"
                name="id"
                value="<?=$row['id']?>"
                hidden>

  <button type="submit" name="update" class="btn btn-primary">Update</button>
  <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='index.php'">
  <a href= "read.php"> view</a>
  <a href= "delivery.php"> Delivery note</a>

 </form>
 </div>
 </body>
 </html>