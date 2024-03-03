<!DOCTYPE html>

<html>

<head>
    <?php
    include 'header.php';
    ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['SESS_NAME']) != "") {
        header("Location: voter.php");
    }
    ?>
    <?php global $msg;
    echo $msg; ?>
    <main>
        <div class="container">
            <div class="container" style="padding:100px;">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="conatiner" id="featuresTab">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="page-header">
                                    <img src="images/picture.png" width="430px" alt="Icon">
                                        <h1 class="specialHead" style="font-size:44px;">E-Voting</h1>
                                        <p class="normalFont" style="font-size:24px;">Greetings!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Footer -->
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <footer class="page-footer font-small special-color-dark pt-3">
                    <div class="footer-copyright text-center py-3">
                        <a href="#"> E-Voting </a>
                    </div>
                </footer>
            </nav>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

        </div>
    </main>

</body>
</html>