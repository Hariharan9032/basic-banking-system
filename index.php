<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Foundation Bank</title>
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

<body class="bg-body">
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
    <!-- Body section -->
    <div class=" container-fluid d-flex justify-content-around">
        <div class="col-5 spark">
            <h3>THE SPARK GROUPS BANK</h3>
            <em class="fs-6"> The Spark Groups Bank is a well-established and trusted financial institution known for its reliable services and customer satisfaction. With a strong presence in the industry, they offer a comprehensive range of banking products and solutions
            to cater to the diverse needs of individuals, businesses, and organizations. The bank prioritizes security and privacy, implementing advanced measures to protect customer information and transactions.</em>
            <br>
            <button class="btn btn-outline-success mt-3">Know More</button>
        </div>
        <div class="col-5">
            <img src="./bank.png" alt="" class="bank-img">
        </div>

    </div>
    <!-- OUR SERVICES -->
    <h3 class="text-center fw-bold">OUR SERVICES</h3>
    <div class="container d-flex justify-content-between mt-5">

        <div class="card cards " style="width: 18rem;">
            <img src="./users.png" class="card-img-top" alt="...">
            <div class="card-body mb-4">
                <h5 class="card-title text-center">View All Users</h5>
                <a href="http://localhost/Task1/users.php" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Click Here</a>
            </div>
        </div>
        <div class="card cards " style="width: 18rem;">
            <img src="./Transfer1.png" class="card-img-top" alt="...">
            <div class="card-body mb-4">
                <h5 class="card-title text-center">Transfer Money</h5>
                <a href="http://localhost/Task1/transact.php" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Click Here</a>
            </div>
        </div>
        <div class="card cards" style="width: 18rem;">
            <img src="./History.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">All Transaction History</h5>
                <a href="http://localhost/Task1/history.php" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Click Here</a>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <div class="footer text-center bg-dark text-white mt-5">
    <p>
        Made with ♡ by Hariharan
    </p>
    <pre>copyrights © Spark Groups Bank</pre>
    </div>


</body>

</html>