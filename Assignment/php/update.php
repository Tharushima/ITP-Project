<?php

if(isset($_GET['id'])){
    include "db_conn.php";

    function validate($data){
        $data =trim($data);
        $data= stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id =validate($_GET['id']);



    $sql ="SELECT * FROM delivery WHERE id=$id";

    $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) >0){
    $row= mysqli_fetch_assoc($result);

    }else{
    header("Location: read.php");
      }


  }elseif(isset($_POST['update'])){
    include "../db_conn.php";


    function validate($data){
        $data =trim($data);
        $data= stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $clientid =validate($_POST['clientid']);
    $address=validate($_POST['address']);
    $delitem=validate($_POST['delitem']);
    $phone=validate($_POST['phone']);
    $delichar=validate($_POST['delichar']);
    $id=validate($_POST['id']);

 
   if(empty($clientid)){
       header('Location:../update.php?id=$id&error=Name is  required');
   }
   elseif(empty($address)){
    header('Location:../update.php?id=$id&error=Email is  required');
  
   }
   elseif(empty($delitem)){
    header('Location:../update.php?id=$id&error=Delivery is  required');
  
   }
   elseif(empty($phone)){
    header('Location:../update.php?id=$id&error=Phone number is  required');
  
   }
   elseif(empty($delichar)){
    header('Location:../update.php?id=$id&error=Delivery Charge is  required');
   }
   else{
       
    $sql =" UPDATE  delivery
     SET clientid='$clientid',addresses='$address',delitem='$delitem',phone='$phone',delichar='$delichar'
     WHERE id=$id";
    
    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location:../read.php?success=successfully updated');
  
    }else{
 
        header('Location:../update.php?id=$id&error=unknown error occurred&$user_data');
  
    }
}

  }

else{
    header("Location: read.php");
}