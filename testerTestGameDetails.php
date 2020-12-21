<?php

//config inclusion session starts
include("config.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {

    $reportId = $_SESSION['the_report_id'];

    if(isset($_POST['delete_report'])) {

        //İŞTE BURAYA EDİT YAPILABİLİR?

    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        #centerwrapper { text-align: center; margin-bottom: 10px; }
        #centerdiv { display: inline-block; }
        /* Navbar container */
        .navbar {
        overflow: hidden;
        background-color: #333;
        font-family: Arial;
        }

        /* Links inside the navbar */
        .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        
        /* Add a red background color to navbar links on hover */
        .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: black;
        }

    </style>
</head>
<body>
    
    <div class="container">
        
        <nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h4 class="navbar-text">Tester <?php echo htmlspecialchars($_SESSION['tester_login_name']); ?></h4>
                </div>
                <a href="testerWelcome.php">Home</a>
                <a href="testerTest.php">Test Game</a>
                <a href="testerTestedGameHistory.php">Tested Games History</a>
                
                <div class="navbar-right">
                    <a href="logout.php">Log Out</a>
                </div>
    </div>
            </div>
        </nav>
        <div id="centerwrapper">
            <div id="centerdiv">
            <br><br>
                <?php
                $gameName = $_SESSION['game_name'];
                $testerId = $_SESSION['tester_id'];

                $report_desc = $_SESSION['written_bug_report'];
                
                echo "<h2>Bug Report of $gameName</h2>";

                echo "<form id=\"reviewForm\" action=\"\" method=\"post\">

                <div class=\"form-group\">
                    <label>Review Description</label>
                    <input type=\"text\" name=\"reviewdesc\" class=\"form-control\" id=\"reviewdesc\" value=\"$report_desc\" readonly=\"readonly\">

                 </div>

                    <button type=\"submit\" onclick=\"checkEmpty()\" name = \"delete_report\"class=\"btn btn-danger btn-sm\">DELETE REPORT</button>
                </form>";
                ?>
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
        
    </script>
</body>
</html>