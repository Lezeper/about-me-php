<?php
$conn = mysqli_connect("mysql.imlewis.com:3306", "<username>", "<password>", "<database>");
if($conn -> connect_errno){
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
mysqli_set_charset($conn,"utf8");