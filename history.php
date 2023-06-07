<?php 

    require_once("./db.php");
    $query = " select * from transactions";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History-Sparks Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    </style>
</head>

<body class="bg-black">
<!-- Header section -->
    <div class=" container-fluid d-flex justify-content-between bg-black">
        <div class="col-5 logo d-flex">
            <img src="./logo.png" alt="" width="75px">
            <h1 class="logo-txt">THE SPARK BANK</h1>
        </div>
        <div class="col-5 nav-bar">
            <div class="nav-items">
                <ul class=" list-unstyled d-flex justify-content-around">
                    <li><a href="./index.php" class="text-decoration-none">Home</a></li>
                    <li><a href="https://www.thesparksfoundationsingapore.org/about/vision-mission-and-values/" target="_blank" class="text-decoration-none">About us</a></li>
                    <li><a href="https://www.thesparksfoundationsingapore.org/contact-us/" target="_blank" class="text-decoration-none">Contact us</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-center">Transaction History</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>S.No</th>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Balance</th>
                                <th>Data And Time</th>
                            </tr>
                            <?php while($rows = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td>
                                    <?php echo $rows['sno']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['sender']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['receiver']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['balance']; ?>
                                </td>
                                <td>
                                    <?php echo $rows['datetime']; ?>
                                </td>
                            </tr>
                            <?php 
                   } 
              ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center bg-black text-white mt-5">
    <p>
        Made with ♡ by Hariharan
    </p>
    <pre>copyrights © Spark Groups Bank</pre>
    </div>

</body>

</html>