<?php

include("include/session.php");

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'> <!--Font-->
    <script type="text/javascript" src="js/scripts.js"></script>
    <title>Timeraft | Board</title>
</head>
<body>
<section>
    <header>
        <nav>
            <ul>
                <li><a href="mainboard.html">BOARDS</a></li>
                <li id="account">USERNAME
                    <ul>
                        <li><a href="account.html">Profile</a></li>
                        <li><a href="settings.html">Settings</a></li>
                        <li><a href="stats.html">Statistics</a></li>
                    </ul>
                </li>
                <li><a href="/Timeraft/help.html"><img class="help" src="images/help.png" \></a></li>
            </ul>
        </nav>
        <img class="logo" src="images/timeraftlogo-white.png" \>
    </header>
</section>

<div class="main-body">
    <div class="board">
        <section class="list">
            <h3>To Do</h3>
            <hr>
            <p>Test 1</p>
            <p>Test 2</p>
        </section>
        <section class="list">
            <h3>Pending</h3>
            <hr>
            <p>Test 3</p>
            <p>Test 4</p>
        </section>
        <section class="list">
            <h3>Finished</h3>
            <hr>
            <p>Test 5</p>
            <p>Test 6</p>
        </section>
    </div>
</div>

</body>
</html>