<?php
include "db_conn.php";

$sql ="SELECT * FROM delivery ORDER BY id DESC";

$result = mysqli_query($conn, $sql);