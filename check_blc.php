<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Check Balance | Your Bank</title>
</head>

<body style="background-color:smokewhite;">
    <?php include 'loader.php'; ?>

    <style>
        body {
            background-image: url(background.jpg);
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

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
                        <a class="nav-link text-nowrap" aria-current="page" href="index.php">Home</a>
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

    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;

            font-weight: bold;
            color: white;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>



    <center>
        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div style="width:80%; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:#fff;">Check Account Balance</h1>
            </div>

            <div class="container" style="backdrop-filter: blur(5px);  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="check_blc.php" method="post">
                    <input type="text" class="formin form-control" name="accno" placeholder="Account Number">
                    <br>
                    <br>
                    <input class="btn btn-primary mybtn" type="submit" value="Submit"><br><br>
                    <p style="color:#fff;">Don't remember your account number? check
                        <a href="all_cust.php">here</a>
                    </p>
                </form>
            </div>
        </div>


        <?php

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection not established: " . mysqli_connect_error());
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $accno = $_POST['accno'];

                $sql = "SELECT blc FROM users where accno='$accno'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo '<div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
                <h2> <i class="fas fa-rupee-sign" aria-hidden="true"></i>' . mysqli_fetch_assoc($result)['blc'] . '</h2></div>';
                } else {
                    echo '<div class="alert alert-danger align-items-center text-center" style="width:34%;" role="alert">
                <div><h2>
                <i class="fas fa-times-circle"></i>
                Something went wrong!</h2>
                </div>
            </div>';
                }
            }
        }
        ?>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <?php
    include_once 'footer.php';
    ?>
</body>

</html>