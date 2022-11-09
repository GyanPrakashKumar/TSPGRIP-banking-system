<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/5c57ccedd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Welcome to Your Bank</title>

    <style>
        #lock {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background: rgb(255, 255, 255) center no-repeat;
            text-align: center;
        }
        body {
                background-image: url(background.jpg);
            }
            
            .nav-link:hover {
                text-decoration: underline;
            }

            .mybtn {
                margin-bottom: 10px;
                box-shadow: 2px 2px 10px black;
                border-radius: 30px;
                background-color: white;
                font-weight: bold;
                color: black;
            }

            .mybtn:active {
                background-color: black;
                color: white;
            }

    </style>
</head>

<body style="background-color:whitesmoke;">
    <div id="container">

        <?php include 'loader.php'; ?>

        <nav class="navbar navbar-expand-lg bg-light fixed fixed-top" style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
            <div class="container-fluid">
                <a href="index.php">
                    <img src="logo.png" alt="" style="height: 80px; margin-left:25px; margin-top:10px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <b>
                    <ul class="navbar-nav ">
                        <li class="nav-item nav-links" style="margin-left:15px;">
                            <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px; ">
                            <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px;">
                            <a class="nav-link text-nowrap" href="all_cust.php">Customers</a>
                        </li>
                        <li class="nav-item" style="margin-left:15px;">
                            <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                        </li>
                    </ul>
                </b>
            </div>
        </nav>
        <div class="container-large" style="color:white; height:500px; width: 100%; padding:8% 2%;">
            <div class="row">
                <div class="col" style="margin: 5%;">
                    <p class="zoomfont" style="font-size:0px; color: white; text-shadow:3px 3px 3px grey; text-align:center;">
                        <b>Welcome to Your Bank!</b>
                    </p>
                </div>
            </div>
        </div>

        <center style="margin:60px 0px 20px 0px;">
            <div class="container" style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
                <h1 style="text-shadow:2px 2px 2px gray; color:#fff;"><b>Our Facilities</b></h1>
                <div class="container" style="margin:30px 0px 20px 0px;">
                    <div class="row">
                        <div class="col-lg">
                            <div style="background-color:azure; color:#333; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img src="https://img.icons8.com/ios-filled/100/null/guest-male--v1.png"/>
                                <br><br>
                                <a href="all_cust.php">
                                    <button type="button" class="btn btn-primary mybtn">
                                        View Customers
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div style="background-color:azure; color:#333; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <img src="https://img.icons8.com/ios/100/null/online-money-transfer.png"/>                                
                                <br><br>
                                <a href="send_money.php">
                                    <button type="button" class="btn btn-primary mybtn">
                                        Transfer Money
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div style="background-color:azure; color:#333; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img src="https://img.icons8.com/ios-filled/100/null/expensive-2--v1.png" style="display: block; margin-bottom: 5%;"/>
                                <a href="check_blc.php">
                                    <button type="button" class="btn btn-primary mybtn">
                                        Check Balance
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" >
        </script>
        <script>
            $(document).ready(function() {
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>

    <?php 
        include_once 'footer.php';
    ?>
</body>

</html>