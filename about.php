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
                                    <div class="page-header" style="padding-top:50px;padding-bottom:50px">
                                        <h1 class="normalFont" style="font-size:44px;">About Website</h1>
                                        <p class="subFont" style="font-size:24px;">Election in the web</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
       
        <div class="row">
          <div class="col-md-4" style="border-right: 3px solid #e0f7cd;">
            <h3>Register</h3>
            <p>Create a new account! This is the first thing you must do inorder to Vote.</p>
          </div>
          <div class="col-md-4" style="border-right: 3px solid #e0f7cd;">
            <h3>Login</h3>
            <p>Login with your credentials. It will take you to elections, show you your options and will display the details about Your Votes.</p>
          </div>
          <div class="col-md-4">
            <h3>Live Voting Result</h3>        
            <p>Shows You the Vote Results of the Election in real-time</p>
          </div>
        </div>
      </div>
    </div>

                        
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>