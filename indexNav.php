<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
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
<style>
    .hdrnavbtn{
        margin: 1vw;
        display: block;
        background-color: black !important;
        color : white !important;
    }
    .bge{
       padding-right: 200px;
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
            <li class="hdrli lgdin lgact">
                    <?php
                        session_start();
            
                        
                        if(isset($_SESSION["loggedin"])){
                            $uname = htmlspecialchars($_SESSION["fullname"]);
                            echo "
                            <p class='bge'>$uname</p>
                            <form action='lgout.php'>
                            
                            <button class='btn hdrnavbtn btn-outline-dark' type='submit'>Logout</button>
                            </form>
                            ";
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

</body>
</html>