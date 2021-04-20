<!DOCTYPE html>
<html>
<head>
<title> Delivery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet"  href="css/style.css">

</header>
<body>

<div class ="container">
<form  action ="php/create.php" method="post">

<?php  if(isset($_GET['error'])){?>

<div class="alert alert-danger" role="alert">
<?php echo $_GET['error'];?>
</div>
<?php }?>
<div class="form-group">
    <label for="name">Client ID</label>
    <input type="text" class="form-control"name="clientid" value="<?php if(isset($_GET['clientid']))  
                                  echo($_GET['clientid']); ?>" 
                                   id="name" placeholder="Enter Client ID">
    </div>


  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address"
    value="<?php if(isset($_GET['address']))  
                                  echo($_GET['address']); ?>" 
                                   placeholder="Enter Address">
    </div>

    <div class="form-group">
    <label for="delivery">Delivery Item</label>
    <input type="text" class="form-control" id="delivery" name="delitem"
    value="<?php if(isset($_GET['delitem']))  
                                  echo($_GET['delitem']); ?>" 
                                    placeholder="Enter Delivery Item">
    </div>
    <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="tel" class="form-control" id="phone" name= "phone"
    value="<?php if(isset($_GET['phone']))  
                                  echo($_GET['phone']); ?>" 
                                  
                                    required placeholder="Enter Phone Number">
    </div>
  
    <div class="form-group">
    <label for="item">Delivey Charge(LKR.)</label>
    <input type="text" class="form-control" id="item" name="delichar"
    value="<?php if(isset($_GET['delichar']))  
                                  echo($_GET['delichar']); ?>" 
                                    placeholder="Enter Delivey charge">
    </div>

    <br>
    <br>

  <button type="submit" name="create" class="btn btn-primary">Submit</button>
  <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='index.php'">
  <a href= "read.php"> view</a>
  <a href= "delivery.php"> Delivery note</a>

 </form>
 </div>

  </div>
  
  <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ©️ 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
 </body>
 </html>