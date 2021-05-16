<?php

if (isset($_POST['create'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $mainid = validate($_POST['mainid']);
    $clientid = validate($_POST['clientid']);
    $lastmain = validate($_POST['lastmain']);
    $nextmain = validate($_POST['nextmain']);
    //$delichar=validate($_POST['delichar']);

    $user_data = 'mainid=' . $mainid . '&clientid=' . $clientid . '&lastmain=' . $lastmain . '&nextmain' . $nextmain;

    if (empty($mainid)) {
        header('Location:../index.php?error=Maintance ID is  required&$user_data');
    } elseif (empty($clientid)) {
        header('Location:../index.php?error=Client ID is  required&$user_data');
    } elseif (empty($lastmain)) {
        header('Location:../index.php?error=Last maintance Day  is  required&$user_data');
    } elseif (empty($nextmain)) {
        header('Location:../index.php?error=Next Maintance Day is  required&$user_data');
    } else {

        $sql = " INSERT INTO  maintence(mainid,clientid,lastmain,nextmain) VALUES('$mainid','$clientid','$lastmain','$nextmain')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully create');
        } else {

            header('Location:../index.php?error=unknown error occurred&$user_data');
        }
    }
}
