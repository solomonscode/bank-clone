<?php
session_start();
// require("./dbconnector.php");
require "./dbconnector2.php";


function generateCode($lent)
{
    $code="";
    
    for ($i=0; $i <$lent ; $i++) {
        $rann = rand(0, 9); 
        $code=$code."".$rann;
    }
    return $code;
}


if (isset($_POST['enroll'])) {

    $uname=htmlentities($_POST['uname']);
    $upass = htmlentities($_POST['upassword']);
    $sql = "SELECT * FROM `login` where username='".mysqli_real_escape_string($conn,$uname). "' and  `password`='" . mysqli_real_escape_string($conn, $upass) ."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["USER"]=$row;
        $_SESSION["CODE"]=generateCode(7);
        echo($_SESSION["CODE"]);
        $expdate=date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +20 minutes"));
        $qr= "INSERT INTO `otp`(  `current_otp`,`expired_otp`,`auth`) VALUES ('". $_SESSION["CODE"]."','". $expdate."','solomon')";
        $stm = $conn->query($qr);
        

        header("location:loginverify.php");
         
    } else {
        $_SESSION["ERROR"]="Invalid Login";
        header("location:index.php");
    }
    // $insert = "INSERT INTO `login` (`username`, `password`) VALUES ('Normanreedus60s', 'mingusnova@4eva');";
    // mysqli_query($mysqli, $insert);
}
