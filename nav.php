<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
    .hdrinpt{
        margin: 0.7vw;
        display: block;
        width: 50vw;
        text-align: center;
        font-weight: bold;
        font-size: 1.2vw;
    }
    .hdrbtn{
        margin: 0.7vw;
        display: block;
        background-color: black !important;
        color : white !important;
        font-weight: bold;
        font-size: 1.2vw;
    }
</style>
    
<header>
    <nav >
        <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#">Home</a>
                    <a href="topHeadlines.php">Top Headlines</a>
                    <a href="#">Followed Topics</a>
        </div>
        <ul class="hdrul"> 
            <li class="hdrli" onclick="openNav()">
                <a class="lgdin lgact">
                    &#9776;
                </a>
            </li>
            <form class="hdrli lgact" action="searchResult.php" method="get">
            <li class="hdrli">
                <input class="hdrinpt form-control" type="search" placeholder="What?.. When?.. Where?.." name="search" autocomplete="off">
            </li>
            <li class="hdrli">
                <button class="btn hdrbtn btn-outline-dark" type="submit">Search</button>
            </li>
            </form>
            <li class="hdrli lgdin lgact">
                    <?php
                        session_start();
                        
                        if(isset($_SESSION["loggedin"])){
                            $uname = htmlspecialchars($_SESSION["username"]);
                            echo "<div class='dropdown'>
                            <button class='dropbtn' onclick='myFunction()'>$uname
                            <i class='fa fa-caret-down'></i>
                            </button>
                            <div class='dropdown-content' id='myDropdown'>
                                <a href='#'>Cart <i class='fa fa-shopping-cart' aria-hdden='true'></i></a>
                                <a href='lg.php'>Logout <i class='fa fa-sign-out' aria-hdden='true'></i></a>
                            </div>
                            </div>
                            <script>
                            /* When the user clicks on the button, 
                            toggle between hiding and showing the dropdown content */
                            function myFunction() {
                            document.getElementById('myDropdown').classList.toggle('show');
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(e) {
                            if (!e.target.matches('.dropbtn')) {
                            var myDropdown = document.getElementById('myDropdown');
                                if (myDropdown.classList.contains('show')) {
                                myDropdown.classList.remove('show');
                                }
                            }
                            }
                            </script>";
                        }else{
                            echo "<a href='Login.php'>
                            Login
                            </a>";
                        }
                    ?>
            </li>
        </ul>
    </nav>
</header>
<body>
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
    }
</script>
    
</body>
</html>