<?php

//config inclusion session starts
include("config.php");
session_start();

//defining necessary variables
$username = "";
$password = "";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
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
                    <h4 class="navbar-text">Developer <?php echo htmlspecialchars($_SESSION['developer_login_name']); ?></h4>
                </div>
                <a href="developerWelcome.php">Home</a>
                <a href="developGame.php">Develop Game</a>
                <a href="publishedGames.php">Published Games</a>
                <div class="navbar-right">
                    <a href="logout.php">Log Out</a>
                </div>
    </div>
            </div>
        </nav>
        <div id="centerwrapper">
            <div id="centerdiv">

            <br><br>
                <h1>Published Games</h1>

                <form id="gameForm" action="" method="post">    
                    <?php
                        // Prepare a select statement
                        $query = "SELECT game_name, game_desc, game_genre FROM game NATURAL JOIN  WHERE developer_id = '1'";

                        $result = mysqli_query($db, $query);

                        if (!$result) {
                            printf("Error: %s\n", mysqli_error($db));
                            exit();
                        }

                        echo "<table class=\"table table-lg table-striped\">
                            <tr>
                            <th>Game Name</th>
                            <th>Game Description</th>
                            <th>Game Genre</th>
                            </tr>";
                            
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['game_name'] . "</td>";
                            echo "<td>" . $row['game_desc'] . "</td>";
                            echo "<td>" . $row['game_genre'] . "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        ?>
                </form> 
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
        
    </script>
</body>
</html>