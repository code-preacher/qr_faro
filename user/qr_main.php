<?php    
$con=new mysqli("localhost","root","","a1");

    echo "<h1>PHP QR Code</h1><hr/>";
    
    //set it to writable location, a place for img generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'img/';

    include "qrlib.php";    

    $matrixPointSize = min(max(10, 1), 10);

    $errorCorrectionLevel='H';
    $data="hello jgudwgdufeyeugfw984896380364083948y4g";
    $qrimgname="oche";
  
        // user data
        $filename = $PNG_TEMP_DIR.$qrimgname.'.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);   
            
    //display generated file
   // echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
    // benchmark
   // QRtools::timeBenchmark();  
$qrimgnamedb=$qrimgname.'.png';  
mysqli_query($con,"insert into tt(img) values('$qrimgnamedb')");