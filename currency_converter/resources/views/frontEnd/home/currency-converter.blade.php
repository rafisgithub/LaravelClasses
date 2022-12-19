<?php
// Denny  direct-access to this script
if(!isset($_POST['amount'])){
    header('HTTP/1.0 401 Unauthorized');
    die("Denny access") ;
}

$amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_INT) ;
if (!is_int($amount) OR $amount <1 ) {
    echo "Wrong input ..... only numbers greater than zero are accepted" ;
    exit() ;
}
$amount = substr($amount , 0 ,10)  ;
// sanitizing input using built in filter_input available from PHP 5.2
$from   = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_SPECIAL_CHARS) ;
$to     = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_SPECIAL_CHARS) ;
// building a parameter string for the query
$encoded_string = urlencode($amount) . urlencode($from) . '=?' . urlencode($to) ;
$url = 'http://www.google.com/ig/calculator?hl=en&q=' . $encoded_string ;


/** Use the CURL extension **/
echo currency_converter_curl($url) ;

/** Use the file_get_content  function **/
// echo currency_converter_fgc($url) ;

function currency_converter_fgc($url){
    $rawdata = file_get_contents($url) ;
    return parse_results($rawdata) ;
}

function currency_converter_curl($url ) {
    $ch = curl_init();
    $timeout = 0;
    curl_setopt ($ch , CURLOPT_URL, $url);
    curl_setopt ($ch , CURLOPT_RETURNTRANSFER, 1) ;
//Optionaly emulate a browser
//curl_setopt($ch ,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)") ;
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout) ;
    $rawdata = curl_exec($ch) ;
    curl_close($ch) ;
    return parse_results($rawdata) ;
}

function parse_results($rawdata) {
    $data = explode(',' ,  $rawdata) ;
    $error = explode('"' , $data['2'] ) ;
    if($error[1] > 0) {
        return "An error was occured , probably unknown currency " ;
    }
    $data = explode('"' , $data[1]) ;
//remove the non breaking character that Google API returns with large numbers
    return str_replace("\xA0", " ", $data[1]  )  ;
}
