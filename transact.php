<?php
$con = mysqli_connect("localhost", "root", "", "sprakfoundationbank");

if (isset($_POST['submit'])) {
    $x = $_POST['sender'];
    $y = $_POST['receiver'];
    $z = $_POST['amount'];

    if ($x !== $y) {
        $sql = "INSERT INTO `sprakfoundationbank`.`transactions` (`sender`, `receiver`, `balance`) VALUES ('$x', '$y', '$z')";
        $rs = mysqli_query($con, $sql);

        if ($rs) {
            $increment = "UPDATE `sprakfoundationbank`.`users` SET `balance` = `balance` + $z WHERE `name` = '$y'";
            $decrement = "UPDATE `sprakfoundationbank`.`users` SET `balance` = `balance` - $z WHERE `name` = '$x'";

            $res_increment = mysqli_query($con, $increment);
            $res_decrement = mysqli_query($con, $decrement);

            if ($res_increment && $res_decrement) {
                $success = true;
            } else {
                $failure1 = true;
            }
        } else {
            echo "Failed to insert transaction";
        }
    } else {
        $failure = true;
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transact - Sparks Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        ul>li>a {
            color: white;
            font-size: large;
        }

        ul>li>a:hover {
            color: rgb(234, 89, 181);
        }

        ul {
            margin-top: 30px;
        }

        .spark {
            margin-top: 150px;
            animation: fadeOut 1s;
        }

        .cards:hover {
            transform: translateY(-10px);
            transition: ease-out 0.5s;
        }

        @keyframes fadeIn {
            0% {
                transform: translateX(180px);
                opacity: 0;
            }

            50% {
                opacity: 0.4;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            0% {
                transform: translateX(-70px);
                opacity: 0;
            }

            50% {
                opacity: 0.4;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .bank-img {
            animation: fadeIn 1.5s;
        }

        .logo-txt {
            margin-top: 20px;
            margin-left: 15px;
            color: white;
            animation: fadeOut 1s;
        }
        .footer{
            position: absolute;
            bottom:0;
            width:100%;
        }
    </style>
 </head>

 <body>
    <!-- Header section -->
    <div class="container-fluid d-flex justify-content-between bg-black">
        <div class="col-5 logo d-flex">
            <img src="./logo.png" alt="" width="75px">
            <h1 class="logo-txt">THE SPARK BANK</h1>
        </div>
        <div class="col-5 nav-bar">
            <div class="nav-items">
                <ul class="list-unstyled d-flex justify-content-around">
                    <li><a href="./index.php" class="text-decoration-none">Home</a></li>
                    <li><a href="https://www.thesparksfoundationsingapore.org/about/vision-mission-and-values/" target="_blank" class="text-decoration-none">About us</a></li>
                    <li><a href="https://www.thesparksfoundationsingapore.org/contact-us/" target="_blank" class="text-decoration-none">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- TRANSACTION -->
    <h1 class="text-center mt-5">Transactions</h1>
    <div class="container text-center d-flex justify-content-center mt-5 mb-5">
        <div class="card text-center" style="width: 30rem;">
            <h4>Enter Details</h4>
            <div class="card-body mt-1 d-flex justify-content-between">
                <div class="mb-2">
                    <img src="./account.png" alt="" width="150px">
                </div>
                <div class="mt-2">
                    <form method="post">
                        <input type="text" placeholder="Sender" class="mb-2" name="sender">
                        <input type="text" placeholder="Receiver" class="mb-2" name="receiver">
                        <input type="text" placeholder="Amount" class="mb-2" name="amount">
                        <br>
                        <button class="btn btn-outline-dark" name="submit">Transact</button>
        
                        <?php if (isset($success) && $success): ?>
        <script>
            swal("Transaction Successful", "<?php echo $z; ?> is transferred to <?php echo $y; ?> account", "success");
        </script>
    <?php elseif(isset($failure) && $failure): ?>
        <script>
            swal("Transaction Failed", "Please check your details and try again", "error");
        </script>
        <?php elseif(isset($failure) && $failure): ?>
            <script>
            swal("Failed to Updated Balance", "Please check your details and try again", "error");
        </script>
    <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center bg-black text-white footer">
    <p>
        Made with ♡ by Hariharan
    </p>
    <pre>copyrights © Spark Groups Bank</pre>
    </div>

 </body>

</html>



