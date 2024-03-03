<!DOCTYPE html>

<html>

<head>
    <?php require 'header_voter.php'; ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="col-sm-12">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        include "auth.php";
        ?>
    </div>
    <div class="container" style="padding:100px;">
        <div class="row">
            <div class="col-sm-12" style="border:2px outset gray;">

                <div class="page-header text-center">
                    <h2 class="specialHead"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2>
                    
                </div>

                <form action="submit_vote.php" name="vote" method="post" id="myform">
                <center>
                <p class="normalFont" style="font-size:24px;"> Who would you like to vote this election? </p><br>    
                <table border="1"><tr bgcolor="d0d0d0">
							<th width="60px" style="padding:10px" >TICK</th>
							<th width="300" style="text-align:center">SYMBOL</th>	
							<th width="500px" style="text-align:center">PARTY</th>
							
							</tr>;
                            <tr style="padding:10px">
                            <td width="60px" style="text-align:center"><input type="radio" name="lan" value="Nepali Congress" cellpadding></td>
							<td width="100px" style="text-align:center"><img src="images/congress.png" width="100px" height="100px"></td>	
							<td width="200px" style="text-align:center">Nepali Congress</td>
                            </tr>
                        
                            </tr>;
                            <tr style="padding:10px">
                            <td width="60px" style="text-align:center"><input type="radio" name="lan" value="Communist Party of Nepal (Maoist Centre)" cellpadding></td>
							<td width="100px" style="text-align:center"><img src="images/cpn-maoist.png" width="100px" height="100px"></td>	
							<td width="200px" style="text-align:center">Communist Party of Nepal (Maoist Centre)</td>
                            </tr>

                            </tr>;
                            <tr style="padding:10px">
                            <td width="60px" style="text-align:center"><input type="radio" name="lan" value="Communist Party of Nepal (Unified Marxist–Leninist)" cellpadding></td>
							<td width="100px" style="text-align:center"><img src="images/ncp_uml.png" width="100px" height="100px"></td>	
							<td width="200px" style="text-align:center">Communist Party of Nepal (Unified Marxist–Leninist)</td>
                            </tr>

                            </tr>;
                            <tr style="padding:10px">
                            <td width="60px" style="text-align:center"><input type="radio" name="lan" value="People Socialist Party, Nepal" cellpadding></td>
							<td width="100px" style="text-align:center"><img src="images/socialist.png" width="100px" height="100px"></td>	
							<td width="200px" style="text-align:center">People Socialist Party, Nepal</td>
                            </tr>

                            </tr>;
                            <tr style="padding:10px">
                            <td width="60px" style="text-align:center"><input type="radio" name="lan" value="Loktantrik Samajwadi Party, Nepal" cellpadding></td>
							<td width="100px" style="text-align:center"><img src="images/loktantrik.png" width="100px" height="100px"></td>	
							<td width="200px" style="text-align:center">Loktantrik Samajwadi Party, Nepal</td>
                            </tr></table>
            
                    </center><br><br>
                    <?php global $msg;
                    echo $msg; ?>
                    <?php global $error;
                    echo $error; ?>
                    <center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
                    </form>
                </div>
        </div>
    </div>
    
</body>

</html>