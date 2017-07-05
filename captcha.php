<?php
    session_start();


    $string = '';
    $dir = '/fonts/';

    //Create random string!
    for ($i = 0; $i < 5; $i++){
        $string .= chr(rand(97, 122));
    }

    // random code is now my output string
    $_SESSION['random_code'] = $string;



    $image = imagecreatetruecolor(136, 50);
    $black = imagecolorallocate($image, 0, 0, 0);
    $color = imagecolorallocate($image, 200, 100, 90);
    $white = imagecolorallocate($image, 255, 255, 255);

    imagefilledrectangle($image, 0, 0, 200, 100, $white); //Rectangle size
    imagettftext($image, 30, 0, 10, 40, $color, $dir."MonospaceTypewriter.ttf", $_SESSION['random_code']); //$dir."Your font"

    header("Content-type: image/png");
    imagepng($image);



?>
