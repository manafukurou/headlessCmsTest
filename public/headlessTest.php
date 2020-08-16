<?php
include 'config.php';
$headlessCmsEndpoint = HEADLESS_CMS_ENDPOINT;
$apiKey = API_KEY;
$headers = ['X-API-KEY:'.$apiKey];

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $headlessCmsEndpoint);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true );
$response = curl_exec($curl);
$result = json_decode($response, true);
curl_close($curl);
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>accessFromPHP</title>
    </head>

    <style>
    .jumbotron { 
        background:url("<?php echo $result["background"]["url"];?>") center no-repeat; 
        background-size: cover;
    }
    </style>
    <body>

    <div class="jumbotron text-center" >
        <h1 class="display-4">Hello,HeadlessCMS!</h1>
        <h2 class="display-4"><?php echo $result["title"];?></h2>
        <img src="<?php echo $result["icon"]["url"];?>" width="100px" >
        <hr class="my-4">
        <p class="lead"><?php echo $result["content"];?></p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>