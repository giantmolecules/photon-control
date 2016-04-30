<?php
//
// PROXY.PHP
// Brett Ian Balogh
// April 30, 2016
// brettbalogh@gmail.com
//
//
include('access.php');
//
foreach($DEVICE_ID as $ID){
    $url='https://api.spark.io/v1/devices/'.$ID.'/'.$_POST['function'].'/';
    //
    $ch = curl_init($url);
    //
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, array('arg' => $_POST['args']));
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$ACCESS_TOKEN));
    //
    $result = curl_exec($ch);
    //
    curl_close($ch);
    //
}
?>
