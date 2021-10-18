<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../../css/navbar.css">
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
    .hdrnavbtn{
        margin: 1vw;
        display: block;
        background-color: black !important;
        color : white !important;
    }
    .bge{
       margin-top: 1.2vw;
       font-weight: bold;
       font-size: 1vw;
    }
</style>
    
<header>
    <nav >
        <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="../../index.php">Home</a>
                    <a href="topHeadlines.php">Top Headlines</a>
                    <a href="followedTopics.php">Followed Topics</a>
        </div>
        <ul class="hdrul"> 
            <li class="hdrli" onclick="openNav()">
                <a class="lgdin lgact">
                    &#9776;
                </a>
            </li>
            <form class="hdrli lgact" action="searchResult.php" method="get">
            <li class="hdrli">
                <input class="hdrinpt form-control" type="search" id="searchbox" placeholder="What?.. When?.. Where?.." name="search" autocomplete="off">
            </li>
            <li class="hdrli">
                <button class="btn hdrbtn btn-outline-dark" type="submit">Search</button>
            </li>
            </form>
            <form class="hdrli lgact" >
                <li>
                    <button class="btn hdrbtn btn-outline-dark" type="submit">Add KeyWord</button>
                </li>
            </form>
            <?php
                        session_start();
            
                        
                        if(isset($_SESSION["loggedin"])){
                            $uname = htmlspecialchars($_SESSION["fullname"]);
                            echo "
                            
                            <form action='../login/lgout.php'>
                            <li class='hdrli lgdin lgact'>
                                <button class='btn hdrnavbtn btn-outline-dark' type='submit'>Logout</button>
                            </li>
                            </form>

                            <li class='hdrli lgdin lgact'>
                                <p class='bge'>$uname</p>
                            </li>
                            ";
                        }else{
                            echo "
                            <li class='hdrli lgdin lgact'>
                            <a href='../login/login.php'>
                            Login
                            </a>
                            </li>";
                        }
                    ?>
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