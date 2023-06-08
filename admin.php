<?php
session_start();
if (empty($_SESSION["admin"])){
    header("location: adminlogin.php");
    }
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <!-------nav----------->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Clear Minds</a>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <div class="column1" onclick="openTab('C1');"><a href="#">Users</a></div>
                    </li>
                    <li class="nav-link">
                        <div class="column1" onclick="openTab('C2');"><a href="#">Specialist</a></div>
                    </li>
                    <li class="nav-link">
                        <div class="column1" onclick="openTab('C3');"><a href="#">Reqeusts</a></div>
                    </li>
                    <li class="nav-link">
                        <div class="column1" onclick="openTab('C4');"><a href="#">Newsletters</a></div>
                    </li>
                    <li class="nav-link">
                        <a href="./logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!------------------------->
    <!--------------main-------------->
    <main>

        <div id="C1" class="containerTab1" style="display:active;">
            <table>
            <tr>
                <th>Fullname</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
            <?php
                $sql = "SELECT fullname, username, email, age FROM users ";
                $result= $db-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["fullname"]."</td><td>". $row["username"]."</td><td>". $row["email"]."</td><td>". $row["age"]."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                
            ?>
            </table>
        </div>

        <div id="C2" class="containerTab1" style="display:none;">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone no</th>
                <th>Address</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "clearmind");
                if ($conn-> connect_error){
                    die("Connection failed:". $conn->connect_error);
                }
                $sql = "SELECT splid, name, phoneno, address FROM specialists; ";
                $result = $conn-> query($sql);
                
                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["splid"]."</td><td>". $row["name"]."</td><td>". $row["phoneno"]."</td><td>". $row["address"]."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conn->close();
            ?>
            </table>
        </div>

        <div id="C3" class="containerTab1" style="display:none;">
        <table>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Specialist name</th>
                <th>Phone no</th>
            </tr>
            <?php
                $connec = mysqli_connect("localhost", "root", "", "clearmind");
                if ($connec-> connect_error){
                    die("Connection failed:". $connec->connect_error);
                }

                $sql = "SELECT fullname,email,name,phoneno FROM users INNER JOIN request ON users.username = request.username INNER JOIN specialists ON request.splid = specialists.splid  ";
                $result= $connec-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["fullname"]."</td><td>". $row["email"]."</td><td>". $row["name"]."</td><td>". $row["phoneno"]."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $connec->close();
            ?>
        </table>
        </div>

        <div id="C4" class="containerTab1" style="display:none;">
        <table>
            <tr>
                <th>Email</th>
                
            </tr>
            <?php
                $conns = mysqli_connect("localhost", "root", "", "clearmind");
                if ($conns-> connect_error){
                    die("Connection failed:". $conns->connect_error);
                }
                
                $sql = "SELECT email FROM newsletter ";
                $result= $conns-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["email"]."</td></tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conns->close();
            ?>
            </table>
        </div>

        <script>
            function openTab(tabName){
                var i, x;
                x=document.getElementsByClassName("containerTab1");
                for (i=0; i<x.length; i++){
                    x[i].style.display="none";
                }
                document.getElementById(tabName).style.display="block";
            }
        </script>


    </main>


    <!-------------------------->
</body>
</html>