<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

    <div class="spinner" style="display:none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 15;
    background: rgba(0,0,0,0.5) center no-repeat;
    text-align:center;
    ">
        <h1 style="color:white; margin-top:25%;">
        <i class="fa fa-refresh fa-circle-notch fa-spin"></i>
        </h1>
    </div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";
    ?>
    <script>
        $(document).ready(function() {
            $("a, :submit").click(function() {
                $(".spinner").css("display", "block");
                setTimeout(function() {
                    $(".spinner").css("display", "none");
                }, 5000);
            });
        });
    </script>


</body>

</html>