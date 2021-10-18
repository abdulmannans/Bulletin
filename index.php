<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BULLETIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <nav>
        <?php include './common/nav/indexNav.php'; ?>
    </nav>
    <style>
    img{
        border-radius: 50%;
        max-width: 8vw;
        margin: 0 auto;
        display: block;
    }
    h1 {
        font-family: serif;
        font-size: 10vw;
        text-align: center;
        padding-top: 10vw;
    }
    div{
        height: auto;
        width: 100%;
    }
    .cntrinpt{
        margin: 0 auto;
        display: block;
        width: 50vw;
        text-align: center;
        font-weight: bold;
        font-size: 1.2vw;
    }
    .cntrbtn{
        margin: 0 auto;
        display: block;
        background-color: black !important;
        color : white !important;
    }
    body{
        background-image: url("https://cdn.stocksnap.io/img-thumbs/960w/mesh-background_HJQZB3UO12.jpg");
        position: relative;
        background-repeat:no-repeat;
        background-size:100% 100vh;
    }
</style>
</head>
<body>
    <div id="main">
   
        <h1>
           BULLETIN
        </h1>
        <form action="./common/menu/searchResult.php" method="get">
            <input class="cntrinpt form-control" type="search" placeholder="What?.. When?.. Where?.." name="search" autocomplete="off"><br>
            <button class="btn cntrbtn btn-outline-dark" type="submit">Search</button>
        </form>
    </div>
        

</body>
</html>