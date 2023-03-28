<?php
session_start();
require("./dbconnector2.php");
if (!empty($_POST["code"])) {
    $code = $_POST["code"];
    // print($_POST["code"]);
    $qur = "SELECT * FROM `otp` WHERE `current_otp`='" . $code . "'";
    $stm = $conn->query($qur);
    print_r($stm->num_rows);
    if ($stm->num_rows > 0) {
        $data = $stm->fetch_assoc();
        if ($data["current_otp"] == $code) {
            $cdate = date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s")));
            $dtime = date("Y-m-d H:i:s", strtotime($data['expired_otp']));
            if ($dtime > $cdate) {
                // $_SESSION['ÉRROR'] = "invalid code";
                $qqq = "";
                $myss = $conn->query($qqq);
                if ($myss->num_rows > 0) {
                    $vd = $myss->fetch_assoc();
                    $_SESSION["FIRSTNAME"] = $vd['first_name'];
                    $_SESSION["LASTNAME"] =  $vd['last_name'];
                    $_SESSION["EMAIL"] = $vd['email'];
                    $_SESSION["BALANCE"] = $vd['acct_balance'];
                } else {
                    $_SESSION["FIRSTNAME"] = "Norman";
                    $_SESSION["LASTNAME"] = "Reedus";
                    $_SESSION["EMAIL"] = "verified.normanreedusoffice@gmail.com";
                    $_SESSION["BALANCE"] = "3,898,900";
                }

                header("location:dashboard");
            } else {
                $_SESSION['ÉRROR'] = "Code Expired";
                header("location:loginverify.php");
            }
        } else {
            $_SESSION['ÉRROR'] = "invalid code";
            header("location:loginverify.php");
        }
    } else {
        $_SESSION['ÉRROR'] = "invalid code";
        header("location:loginverify.php");
    }
} else {
    $_SESSION['ÉRROR'] = "please add code";
    header("location:loginverify.php");
}
