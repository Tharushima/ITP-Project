<?php

if(isset($_POST['create'])){
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

   $user_data='clientid='.$clientid.'&address='.$address.'&delitem='.$delichar.'&phone'.$phone.'&delichar'.$delichar;

   if(empty($clientid)){
       header('Location:../index.php?error=Name is  required&$user_data');
   }
   elseif(empty($address)){
    header('Location:../index.php?error=Email is  required&$user_data');
  
   }
   elseif(empty($delitem)){
    header('Location:../index.php?error=Delivery is  required&$user_data');
  
   }
   elseif(empty($phone)){
    header('Location:../index.php?error=Phone number is  required&$user_data');
  
   }
   elseif(empty($delichar)){
    header('Location:../index.php?error=Delivery Charge is  required&$user_data');
   }
   else{
       
    $sql =" INSERT INTO  delivery(clientid,addresses,delitem,phone,delichar) VALUES('$clientid','$address','$delitem','$phone','$delichar')";
    
    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location:../read.php?success=successfully create');
  
    }else{
 
        header('Location:../index.php?error=unknown error occurred&$user_data');
  
    }
}

 
}
