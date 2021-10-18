<!DOCTYPE html>
<html lang="en">
<head>
    <title>BULLETIN- Top Headlines</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <nav>
      <?php include '../nav/nav.php'; ?>
    </nav>
    <style>
      body{
        background-image: url("https://cdn.stocksnap.io/img-thumbs/960w/mesh-background_HJQZB3UO12.jpg");
        position: relative;
        background-repeat:no-repeat;
        background-size:100% 100vh;
    }
    </style>
  </head>
<?php
    header("Refresh:60");
    function search(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v4/top-headlines?token=a38578b35dd0a5ca4c94f7d5cf988bfd&lang=en');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $data = curl_exec($ch);
        curl_close($ch);
        $json_array = json_decode($data, true);
        return $json_array['articles'];
    }

    $response = search();

    

    foreach($response as $result){
            $str = $result['publishedAt'];
            $pattern = "/[tz]/i";
            $date = preg_replace($pattern, " ", $str);
            echo "<div class='list-group'>
            <a href='".$result['url']."' class='list-group-item list-group-item-action flex-column align-items-start'>
              <div class='justify-content-between'>
                <h5 style='font-weight: bold;'>".$result['title']."</h5>
                <small>".$date."</small>
                <img src='".$result['image']."' height= 'auto' width= '15%' align='right'>
              </div>
              <p>".$result['description']."</p>
              <span>".$result['source']['name']."</span>
              
            </a>";
    }



?>
</html>